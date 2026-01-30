<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Products ;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class ProductsController extends Controller
{
    public function index(){ 
    return view('admin_dashboard');
    }
    public function create(){ 
    $categories = categories::all();
    return view('admin_create_product',compact('categories'));
    }
    public function store(Request $request){
    $request -> validate([
    'name' => 'required|string' ,
    'description' => 'required|string' ,
    'stock' => 'required|int' ,
    'price' => 'required|int|nullable' ,
    'categoryId' => 'required|int|nullable' ,
    ]);
    Products::create([
    'name' => $request->name ,
    'description' => $request->description ,
    'stock' => $request->stock ,
    'price' =>  $request->price ,
    'categoryId' => $request->categoryId ,
    'image' => $request->image 
    ]);
    return $this -> showProducts();
    }
    public function edit($id){
    $theproduct = Products::findOrFail($id);
    $categories = categories::all();
    return view('forms/editProductForm',compact('theproduct','categories'));
    }
    public function update(Request $request,$id ){
               $newValues = $request -> validate([
               'name' => 'required|string' ,
               'description' => 'required|string' ,
               'stock' => 'required|int' ,
               'price' => 'required|int|nullable' ,
               'categoryId' => 'required|int|nullable' ,
                ]);
            $theproduct = Products::find($id);
            $theproduct->update([
            'name' => $request->name ,
            'description' => $request->description ,
            'stock' => $request->stock ,
            'price' =>  $request->price ,
            'categoryId' => $request->categoryId ,
            'image' => $request->image 
            ]);
            return $this -> showProducts() ;
    }
    public function destroy($id){
        Products::destroy($id);
        return $this -> showProducts() ;
    }
    public function show($id){
        $theproduct = Products::find($id);
        return view('product_detail',compact('theproduct'));
    }
    public function showProducts(){
            $name = $_GET['name'] ?? '' ;
            $allproducts = Products::with('category')->where('name','LIKE','%'.$name.'%')->orderBy('created_at','ASC')->paginate(5);
            $categories = categories::all();
            return view('admin_products',compact('allproducts','categories'));
    }
    public function filter($id){
    $allproducts = Products::with('category')->where('categoryId',$id)->orderBy('created_at','ASC')->paginate(5);
    $categories = categories::all();
    return view('admin_products',compact('allproducts','categories'));
    }
}