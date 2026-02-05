<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Client\FavoriteController;
use App\Http\Helpers\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
    Validator::RegisterValidator($request);
    User::create(array_merge($request->all(),['role' => 'client']));
    return view('login');
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
                    if(Auth::user()->role=='admin'){
                        $request->session()->regenerate();
                        return ProductsController::index();
                    }
                    else{
                        $request->session()->regenerate();
                        return FavoriteController::index(); 
                    }
                    }
                    else{
                        $this->show();
                    }
        }
        public function logout(){
            Auth::logout();
            return to_route('index');
        }
}
