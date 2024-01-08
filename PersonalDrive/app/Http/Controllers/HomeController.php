<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function add_product(Request $request){
        
        $request->validate([
            'title'=>'required | min:6',
            'descriptionProduct'=>'required | max:60',
            'image'=>'required | mimes:jpg,png,jpeg,svg'
        ]);
        $data=new Product;
        
        $data->title = $request->title;
        $data->descriptionProduct = $request->descriptionProduct;
        $image = $request->image;
        
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image=$imagename;
        }

        $data->save();
         
        return redirect()->back(); 
    }

    public function show_product(){
        $data =  Product::all();

        return view ('product',compact('data'));
    }

    public function delete_product($id){
        
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_product($id){
        $product = Product::find($id);
        
        return view('product_update',compact('product'));
    }

    public function edit_product(Request $request, $id){

        $data = Product::find($id);
        $data->title = $request->title;
        $data->descriptionProduct = $request->descriptionProduct;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image= $imagename;
        }

        $data->save();

        return redirect()->back();
    }
}
