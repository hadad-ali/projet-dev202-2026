<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function helloGender($gender, $nom)
    {
        if ($gender == 'h') {
            $nom = 'monsieur '.$nom;
        } elseif ($gender == 'f') {
            $nom = 'madame '.$nom;
        } 
        return view('hello', compact('nom'));
    }
}
