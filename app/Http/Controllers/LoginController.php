<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
    Validator::RegisterValidator($request);
    User::create([
        'name' => $request->name ,
        'email' => $request->email ,
        'password' => $request->password ,
        'role' => 'admin'
        ]);
        }
        public function index(){
            return view('register');
            
            }
            public function show(){
                return view('login');
                }
                public function login(Request $request){
                    Validator::loginValidator($request);
                    $credentials = ['email'=>$request->email,'password'=>$request->password];
                   if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    return ProductsController::index();
                    };
    }
}