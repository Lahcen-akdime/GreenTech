<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
   public static function index(){
      $name = $_GET['name'] ?? '' ;
      $products = Products::with('category')->where('name','LIKE','%'.$name.'%')->orderBy('created_at','ASC')->paginate(5);
      $categories = categories::all(); 
      // dd('hsvdnhv');
        return view('client_space',compact('products','categories'));
        }
   public function show(){
      return view('wishlist');
   }
}