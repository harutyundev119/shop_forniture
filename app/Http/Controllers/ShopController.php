<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
   public function show2Products(Request $request) {
/*
         $products = Product::all();*/

$products = Product::where('category','=','Chairs')->get();

        return view('shop', ['products'=>$products]);
    }
}
