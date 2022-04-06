<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class livreController extends Controller
{
   
   
    public function index()
    {
        $book = [
            "livre1",
            "livre2",
            "livre3"
        ];
        return view('book', compact('book'));
    }
 

}
