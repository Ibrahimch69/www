<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\exoController;
use App\Http\Controllers\simplonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("acceuil", function(){
    return response()->json([
        "titre" => "naruto",
        "description" => "manga"
    ]);
});

Route::get("football", function(){
    return response()->json([
        "joueur" => "Ronaldo",
        "joueur2" => "Benzema",
        "qui sont il?" => "Des GOAT"
    ]);
});

Route::get("produit", function(){
    return view("produit");
});

Route::get("foot", function(){
    return view("foot");
});

Route::get("simplon", [simplonController::class, "index"]);


Route::get('exo', [exoController::class, 'ch2']);
Route::get('exo/{id}', [exoController::class, 'chien']); 