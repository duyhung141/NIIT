<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $list=Product::all();
        return view('cart.list',compact('list'));
    }

    public function addCart(){

    }
}
