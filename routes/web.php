<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', [PagesController::class, 'home'])->name('hm');

// localhost:8000/about-us
Route::get('/about-us', [PagesController::class, 'about'])->name('abt');

Route::get(
    '/hello',
    [PagesController::class, 'hello']
);

Route::get(
    '/hello/{nom}',
    [PagesController::class, 'helloName']
);

Route::get('/hello/{gender}/{nom}',
    [PagesController::class, 'helloGender']);

Route::get('/users', [PagesController::class, 'listUsers']);

Route::get('/products', [ProductsController::class, 'list']);


//  /product/2 => adidas 150dh
Route::get('/product/{id}',[ProductsController::class,'detail']);


// detail d'un seule produit
//  /product/1 => adidas 150dh
//  /product/2 => nike 299dh


