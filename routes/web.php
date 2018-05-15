<?php

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

use Illuminate\Support\Facades\Mail;
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('clientes', 'ClienteController');

Route::post('c','ClienteController@store');
Route::get('c','ClienteController@index');

Route::get('/clientes','ClienteController@clients')->name('dataProcessing');

//enviar email
Route::get('email', function() {
    //return new \App\Mail\WelcomeUser();
    Mail::to('localbercap@gmail.com')->send(new \App\Mail\WelcomeUser());
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/prueba2', function () {
    return view('prueba2');
});
Route::post('/generar', 'personaController@generar')->name('generar'); 