<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/login', function () {
    return view('Login');
});
Route::get('/logout', function () {
    Session::forget('user'); 
    return redirect('login');
});
Route::get('/register_email', function () {
    return view('Email');
});
Route::post("/Register",[UserController::class,'Register']);
Route::post('/login',[UserController::class,'login']);
Route::get('/product',[ProductController::class,'index']);
Route::get("details{id}",[ProductController::class,'details']);
Route::get('/serach',[ProductController::class,'serach']);
Route::post("add_to_cart",[ProductController::class,'cart']);
Route::get("cart_item",[ProductController::class,'cart_item']);
Route::get("removecart/{id}",[ProductController::class,'removecart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("/orderpage",[ProductController::class,'orderPage']);
Route::get("/myorders",[ProductController::class,'myOrders']);










    

