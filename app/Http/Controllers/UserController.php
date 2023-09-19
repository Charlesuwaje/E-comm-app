<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
   
  public function Register(RegisterRequest $request){
    // return $request->input();
    $user = new User([
        'name' => $request->name,
        'email' => $request-> email,
        'password' => Hash::make($request->password)
    ]);
    $user->save();
 return redirect('/login'); 
    }
  public function login(Request $request)
          {
              // $request->validated($request->only(['email', 'password']));   

              // if (!Auth::attempt($request->only(['email', 'password']))) {
              //  return  redirect('register');
              // }else {
              //   $user = User::where('email', $request->email)->first();

              //   return redirect('product');
              // }
            
               $user =User::where(['email' =>$request->email])->first();
            // dd($request);
            if (!$user||!Hash::check($request->password, $user->password)) {
           
              return with("User name and pasword incorrect");
            }else {
              $request->session()->put('user', $user);
              return redirect('/product');
            }
           
           
              
          }
          public function register_email(Request $request){

            return view('/register_email');
          }
   
           
}