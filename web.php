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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('home');
// });


Route::get('home', 'App\Http\Controllers\mycontroller@home');
Route::get('login', 'App\Http\Controllers\mycontroller@login');
Route::get('set', 'App\Http\Controllers\mycontroller@Sessionsetname');
Route::get('get', 'App\Http\Controllers\mycontroller@Sessiongetname');
Route::get('remove', 'App\Http\Controllers\mycontroller@Sessionremove');
Route::post('home', 'App\Http\Controllers\mycontroller@process');
