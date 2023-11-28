<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\SignController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Email;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getName', function () {
    return "HELLO WORD";
});

Route::get('/hola/{id}', function ($id) {
    return "Hello".$id;
});


Route::get('/sign/signup/{p1}', function ($p1) {
    return "Hola ".$p1;
});

Route::get('/sign/signin/{inici}/{secion}/{de}/{usuari}', [SignController::class, 'signin']);

Route::get('/sign/signup/{creacio}/{usuari}/{nom}', [SignController::class, 'signup']);



Route::post('/login', [loginController::class, 'login']);


Route::get('/error', function (){
    return "Error d’accés";
}) -> name ('errorAcces.index');




// Route::post('/login', function(){
// $email = Request('email');
// $password = Request('password');
// return `El meu Email es`. $email . 'y el password es'. $password;
// });

// Route::post('/login', function(){
//     $email = 'luisalvarado338@gmail.com';
//     return view('login.alumne')-> with('variable', `hola`);
// }) -> name('user');