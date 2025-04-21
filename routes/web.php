<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::view('/expense list','expense list');
Route::view('/add expense','add expense');
Route::view('/analytics page','analytics page');
Route::view('/login','login');
