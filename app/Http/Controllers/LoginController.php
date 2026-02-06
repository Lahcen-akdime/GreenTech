<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Client\FavoriteController;
use App\Http\Helpers\Validator;
use App\Models\User;
use FFI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
    Validator::RegisterValidator($request);
    User::create(array_merge($request->all(),['role' => 'admin']));
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
                        return ProductsController::index();
                    }
                    else{
                        return $this->showProducts();
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
        public function showProducts(){
            return FavoriteController::index();
        }
}
