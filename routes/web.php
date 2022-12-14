<?php

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
    return view('home');
})->name('home');

Route::get('/hello/{name}', function ($name)  {
    //traitement des données
        $name = '"'.$name.'"';
    
    return view('hello',  [
    //passage d'une variable a une vue 
    'name' => $name,
  ]);
})->name('hello');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');
