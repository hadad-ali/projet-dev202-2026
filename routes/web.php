<?php

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
