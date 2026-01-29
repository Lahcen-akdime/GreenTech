<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\Products ;

use function Laravel\Prompts\alert;

class ProductsController extends Controller
{
    // The route will run a request like this ( /categoriesController/{id} ) and we use what come from it

    public function index(){ // the index diraction to the page main / home :)
    // you can use view::('page','compact')to rediract and sent what you need in the page !
    return view('admin_dashboard');
    }
    public function create(){ // rediract to a page that alaws us to create somthing , new ressource ( like to a form )
    $categories = categories::all();
    return view('admin_create_product',compact('categories'));
    }
    public function store(Request $request){ // send data to the database , for example if we submit a form this method  work 
    //and also this method call the create method , that exist on the model , and we sent to it the data , after validate it if you want to
    // dd( $request);
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
    public function edit($id){ // show a form that alaws user to say the current values , and then he can change it and submit it  
    // the id alaw us to call the method find and return all values from the database , and then call view , and give it all data to show it
    $theproduct = Products::findOrFail($id);
    $categories = categories::all();
    return view('forms/editProductForm',compact('theproduct','categories'));
    }
    public function update(Request $request,$id /* he can come in request*/){ // this method is working after the previus directly ,
                // because it alaw us to sent the new informations after submit the edit form , and here you call validator +
               // you call the method of update inside the model + redirect it to success msg 
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
    public function destroy($id){ //delete something inside the database , using the id 
        Products::destroy($id);
        return $this -> showProducts() ;
    }
    public function show($id){ // display all data for something (like book) by his id ! 
        $theproduct = Products::find($id);
        return view('product_detail',compact('theproduct'));
    }
    public function showProducts(){
    $allproducts = Products::orderBy('created_at','ASC')->get();
    return view('admin_products',compact('allproducts'));
    }
}
