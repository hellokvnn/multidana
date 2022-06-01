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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/pulsa-retail', function () {
    return view('pulsa-retail', [
        "title" => "Pulsa Retail"
    ]);
});

Route::get('/download-app', function () {
    return view('download-app', [
        "title" => "Download App"
    ]);
});

Route::get('/pulsa-h2h', function () {
    return view('pulsa-h2h', [
        "title" => "Pulsa H2h"
    ]);
});

Route::get('/kontak-kami', function () {
    return view('kontak-kami', [
        "title" => "Kontak Kami"
    ]);
});