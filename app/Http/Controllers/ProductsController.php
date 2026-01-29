<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products ;

class ProductsController extends Controller
{
    // The route will run a request like this ( /categoriesController/{id} ) and we use what come from it

    public function index(){ // the index diraction to the page main / home :)
    // you can use view::('page','compact')to rediract and sent what you need in the page !
    $allproducts = Products::all();
    return view('home',compact('allproducts'));
    }
    public function create(){ // rediract to a page that alaws us to create somthing , new ressource ( like to a form )
        
    }
    public function store(Request $request){ // send data to the database , for example if we submit a form this method  work 
    //and also this method call the create method , that exist on the model , and we sent to it the data , after validate it if you want to
    }
    public function edit($id){ // show a form that alaws user to say the current values , and then he can change it and submit it  
    // the id alaw us to call the method find and return all values from the database , and then call view , and give it all data to show it
    $theproduct = Products::findOrFail($id);
    return view('forms/editProductForm',compact('theproduct'));
    }
    public function update(Request $request , $id /* he can come in request*/){ // this method is working after the previus directly ,
    // because it alaw us to sent the new informations after submit the edit form , and here you call validator +
    // you call the method of update inside the model + redirect it to success msg 
    }
    public function destroy($id){ //delete something inside the database , using the id 
        
    }
    public function show($id){ // display all data for something (like book) by his id ! 

    }
}
