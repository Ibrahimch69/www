<?php





use App\ut;
use Illuminate\Support\Facades\Route;




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
Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/inscription', function () {
    $utilisateur = new App\Models\ut;
    $utilisateur->email = request('email');
    $utilisateur->password = request('password');
    $utilisateur->save();
    return 'Bonjour ' . request('nom').'Votre mail est :'. request('email');
    
});




