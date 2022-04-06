<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SimplonController extends Controller
{
    public function index(){
        return  view("Simplon");
    }

}


