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

Route::get('/prenom/{jonathan}', function($name){
    return '<h2> Le prénom est '.$name.'.</h2>';
});

Route::get('/number/{number}', function($number){
    $number = (int)$number;
    return view('welcome', compact('number'));
});
Route::get('/new/{var1}/{var2}', function($var1, $var2){
    $var1 = (int)$var1;
    $var2 = (int)$var2;
    return view('exo3', compact('var1', 'var2'));
});