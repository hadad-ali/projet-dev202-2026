<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function hello()
    {
        return view('hello');
    }

    public function helloName($nom)
    {
        return view(
            'hello',
            compact('nom')
        );
    }

    public function helloGender($gender, $nom)
    {
        if ($gender == 'h') {
            $nom = 'monsieur '.$nom;
        } elseif ($gender == 'f') {
            $nom = 'madame '.$nom;
        }

        return view('hello', compact('nom'));
    }

    function listUsers(){


    return view('users');
    }
}
