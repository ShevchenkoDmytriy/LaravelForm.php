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
    return view('Home');
})->name('Home');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');


Route::get('/About', function () {
    return view('About');
})->name('About');
Route::post('/Contact/submit', function () {
    return view('/About');
})->name('Contact-form');

