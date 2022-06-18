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
    return view('welcome');
});


Route::get("/lesson3", function(){
    return view('lesson3');
});

Route::get("/lesson4", function(){
    return view('lesson4');
});

Route::get("/lesson5", function(){
    return view('lesson5');
});

Route::get("/lesson6", function(){
    return view('lesson6');
});

Route::get("/lesson7", function(){
    return view('lesson7');
});
