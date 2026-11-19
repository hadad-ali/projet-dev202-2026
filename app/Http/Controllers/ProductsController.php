<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function list()
    {
        $prods = Product::all();

        return view('products.list', compact('prods'));
    }

    public function detail($id)
    {
        // /product/985
        // Product::find(985);

        $pr = Product::findOrFail($id);

        // if($pr == null) return "produit introuvable";

        return view("products.detail",compact('pr'));
    }

    // operations CRUD

    // SSR : SERVER SIDE RENDERING (bien pour SEO : google
}
