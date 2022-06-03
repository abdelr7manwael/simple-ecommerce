<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{


    //all products
    function index(){
        $products = Product::get();

        return view('products/list',['products'=> $products]);
    }

    //more than 100$
    function filter(){
        $products = Product::where('price','>=',100)->get();
        return view('products/filter',['products'=> $products]);
    }
}
