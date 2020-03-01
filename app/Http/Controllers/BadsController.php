<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class BadsController extends Controller
{
     public function badsProducts(Request $request) {
/*
         $products = Product::all();*/

$products = Product::where('status','=','bads')->get();

        return view('bads', ['products'=>$products]);
    }
}
