<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Builder\Function_;

class ProductController extends Controller
{
        public function index(Request $request)
        {
                $product = Product::all();

                // dd($request->product);
                return view('product', ['products' => $product]);
                // return 'welcome to product page';

        }
        // will make use of that function soon*/

        // public function details($id)
        // {
        //         $data = Product::find($id);
        //         return view('', ['products' => $data]);
        // }

        // to save product in the cart
        public function cart(Request $request)
        {
                if ($request->session()->has('user')) {

                        $cart = new Cart;
                        $cart->user_id = $request->session()->get('user')['id'];
                        $cart->product_id = $request->product_id;
                        $cart->save();
                        return redirect('/product');
                } else {
                        return redirect('/login');
                }
        }
        //  search function
        public function serach(Request $request)
        {
                $search = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
                return view('search', ['products' => $search]);
        }
        // This is to cout the number of product in the cart
        static public function cartlist()
        {
                $cartid = Session::get('user')['id'];
                return Cart::where('user_id', $cartid)->count();
        }
        // this is to join the relation between the product_id and the user_id and cart_id
        public function cart_item()
        {
                $userid = Session::get('user')['id'];
                $product =  DB::table('cart')
                        ->join('products', 'cart.product_id', '=', 'products.id')
                        ->where('cart.user_id', $userid)
                        ->select('products.*', 'cart.id as cart_id')
                        ->get();
                return view('cart_item', ['products' => $product]);
        }
        public function removecart($id)
        {

                Cart::destroy($id);
                return redirect('/cart_item');
        }

        // this is to checkout all the items that are on the cart list.
        public function orderNow()
        {

                $userid = Session::get('user')['id'];
                $total = $product =  DB::table('cart')
                        ->join('products', 'cart.product_id', '=', 'products.id')
                        ->where('cart.user_id', $userid)
                        ->sum('products.price');
                return view('Order', ['total' => $total]);
        }
        public function orderPage(Request $request)
        {
                $userid = Session::get('user')['id'];
                $allCart = Cart::where('user_id', $userid)->get();
                foreach ($allCart as $cart) {
                        $Order = new Order;
                        $Order->product_id = $cart['product_id'];
                        $Order->user_id = $cart['user_id'];
                        $Order->status = "pending";
                        $Order->payment_method = $request->payment;
                        $Order->payment_status = "pending";
                        $Order->address = $request->address;
                        $Order->save();
                        Cart::where('user_id', $userid)->delete();
                }
                $request->input();
                return redirect('/product');
        }

        public function myOrders(){
                $userid = Session::get('user')['id'];
                $orders = $product =  DB::table('orders')
                        ->join('products', 'orders.product_id', '=', 'products.id')
                        ->where('orders.user_id', $userid)
                        ->get();
                return view('/myorders', ['orders' => $orders]);
        }
}
