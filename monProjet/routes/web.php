<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplonController;

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

Route::get("acceuil", function (){
    return response()->json([
        'titre'=> "naruto",
        'description'=>"manga"

    ]);
});
Route::get("ftb", function (){
    return response()->json([
        'titre'=> "messi",
        'description'=>"manga"

    ]);
});



Route::get("produits", function(){
    return view("produits");
});
Route::get("jouer", function(){
    return view("jouer");
});



Route::get('Simplon',[SimplonController::class,'index']);