<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', function () {
    return view('home');
})->name('hm');

// localhost:8000/about-us
Route::get('/about-us', function () {
    return view('about');
})->name('abt');

Route::get(
    '/hello',
    function () {
        return view('hello');
    }
);

Route::get(
    '/hello/{nom}',
    function ($nom) {
        return view(
            'hello',
            compact('nom')
        );
    }
);
// ROUTES(url) MODEL(bd) VIEW(html) CONTROLLER(fonction)

// /hello/h/ali

// php artisan make:controller PagesController
Route::get( '/hello/{gender}/{nom}',
[PagesController::class, 'helloGender'] );

// hello/mohamed => bonjour mohamed

// hello/h/ali   =>  bonjour monsieur ali
// hello/f/sara  => bonjour madame sara
// hello/zdzd/sara  => bonjour sara
