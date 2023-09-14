<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerumahanController;

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

Route::get('/about', function () {
    return view('about',[
        "name" => "Revontheus",
        "email"=> "Revontheus@gmail.com"
    ]);
});


Route::get('/perumahan',[PerumahanController::class, 'index']);
// Route::get('/perumahan','postController2@index');
// Route::resource('perumahan',\App\Http\Controllers\PerumahanController::class );


// // Laravel 7
// Route::get('/buku',['BukuController@index']);


//Laravel 10
Route::get('/buku',[BukuController::class, 'index']);

