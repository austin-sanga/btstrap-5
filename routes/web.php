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


Route::get("/lesson1", function(){
    return view('lesson1');
});

Route::get("/lesson2", function(){
    return view('lesson2');
});

Route::get("/lesson3", function(){
    return view('lesson3');
});
