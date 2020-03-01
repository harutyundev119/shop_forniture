<?php



namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show1Products(Request $request) {
/*
         $products = Product::all();*/

$products = Product::where('status','=','home')->get();

        return view('index', ['products'=>$products]);
    }
     public function viewProject($id)
    {
        $products = Product::where('id','=',$id)->get();
        return view::make('details', ['products'=>$products]);
    }
}
