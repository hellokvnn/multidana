<?php

use App\Http\Controllers\IndosatController;
use App\Models\Indosat;
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

Route::get('/dashboard', function () {
    return view('/dashboard/dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/slider', function () {
    return view('/dashboard/slider', [
        "title" => "Slider"
    ]);
});

Route::get('/pulsa-retail-setting', function () {
    return view('/dashboard/pulsa-retail-setting', [
        "title" => "Pulsa Retail Setting"
    ]);
});

Route::get('/pulsa-telepon-setting', function () {
    return view('/dashboard/pulsa/pulsa-telepon-setting', [
        "title" => "Pulsa Telepon Setting"
    ]);
});

Route::get('/telkomsel-retail', function () {
    return view('/dashboard/telkomsel-retail', [
        "title" => "Telkomsel Retail"
    ]);
});
Route::get('/axis-retail', function () {
    return view('/dashboard/axis-retail', [
        "title" => "Axis Retail"
    ]);
});

Route::get('/xl-retail', function () {
    return view('/dashboard/xl-retail', [
        "title" => "XL Retail"
    ]);
});

Route::get('/smartfren-retail', function () {
    return view('/dashboard/smartfren-retail', [
        "title" => "Smartfren Retail"
    ]);
});

Route::get('/three-retail', function () {
    return view('/dashboard/three-retail', [
        "title" => "Three Retail"
    ]);
});

Route::get('/mtix-retail', function () {
    return view('/dashboard/mtix-retail', [
        "title" => "MTIX Retail"
    ]);
});

Route::get('/tix-retail', function () {
    return view('/dashboard/tix-retail', [
        "title" => "TIX Retail"
    ]);
});


Route::get('indosat-retail', [IndosatController::class, 'index']);

Route::get('pulsa-retail', [IndosatController::class, 'indexMain']);