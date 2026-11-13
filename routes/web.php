<?php

use App\Http\Controllers\PagesController;
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

Route::get('/users',[PagesController::class, 'listUsers']);
