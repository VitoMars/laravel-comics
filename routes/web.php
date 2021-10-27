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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/header', function () {
//     return view('header');
// });

// Route::get('/main', function () {
//     return view('main');
// });

// Route::get('/footer', function () {
//     return view('footer');
// });


Route::get('/', function () {
    $current_series = config('comics');
    $comics = [
        'comics' => $current_series
    ];
    return view('home', $comics);
})->name('homepage');
