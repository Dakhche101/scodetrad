<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class UserController extends Controller
{
    public function showproducts(){
        $products=product::all();
        return view('user.home',['products'=>$products]);
    }
    public function productinfo($id){
        $product=product::findOrFail($id);
        return view('user.productinfo',compact('product'));
    }
}
