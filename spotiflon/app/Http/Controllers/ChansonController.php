<?php

namespace App\Http\Controllers;

use App\Models\Chonson as ChonsonModel;
use Illuminate\Http\Request;

class ChansonController extends Controller
{
    public function show(){
        $chanson = ChonsonModel::all();
        return view('welcome', ['chanson' => $chanson]);
    }

  
    
}
