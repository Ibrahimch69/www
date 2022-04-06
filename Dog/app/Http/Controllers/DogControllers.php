<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogControllers extends Controller
{
    public function index () {
       // $nom = "Heroce";
        //return view('simplon', compact('nom'));
        //return view('simplon')->with('nom', $nom);
        // return view('simplon', [
        //     'nom' => $nom
        // ]);

        $caracteristique = [
            "berger allemand",
            "noir",
            "16ans"
        ];

        return view('dog', compact('caracteristique'));
    }
  
}
