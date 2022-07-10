<?php

use App\Http\Controllers\PulsaController;
use App\Http\Controllers\IndosatController;
use App\Http\Controllers\TelkomselController;
use App\Http\Controllers\AxisController;
use App\Http\Controllers\SmartfrenController;
use App\Http\Controllers\XlController;
use App\Http\Controllers\ThreeController;
use App\Http\Controllers\MtixController;
use App\Http\Controllers\TixController;
use App\Models\Indosat;
use App\Models\Telkomsel;
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

Route::get('/pulsa-telepon', function () {
    return view('pulsa-telepon', [
        "title" => "Pulsa Telepon"
    ]);
});

Route::get('/pln-tv-kabel', function () {
    return view('pln-tv-kabel', [
        "title" => "PLN TV Kabel"
    ]);
});

Route::get('/voucher-games', function () {
    return view('voucher-games', [
        "title" => "Voucher Games"
    ]);
});

Route::get('/produk-multibiller', function () {
    return view('produk-multibiller', [
        "title" => "Produk Multibiller"
    ]);
});

Route::get('/topup-e-money', function () {
    return view('topup-e-money', [
        "title" => "Top Up E-Money"
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

Route::resource('indosat-retail', IndosatController::class);

Route::resource('telkomsel-retail', TelkomselController::class);

Route::resource('axis-retail', AxisController::class);

Route::resource('smartfren-retail', SmartfrenController::class);

Route::resource('xl-retail', XlController::class);

Route::resource('three-retail', ThreeController::class);

Route::resource('mtix-retail', MtixController::class);

Route::resource('tix-retail', TixController::class);

Route::get('pulsa-telepon', [PulsaController::class, 'index']);
