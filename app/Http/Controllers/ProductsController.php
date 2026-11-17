<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function list(){
       $prods = Product::all();
       return view('products.list',compact('prods'));
    }
}
