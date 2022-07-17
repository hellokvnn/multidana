<?php

use App\Http\Controllers\PulsaController;
use App\Http\Controllers\IndosatController;
use App\Http\Controllers\IndosatPlnController;
use App\Http\Controllers\TelkomselController;
use App\Http\Controllers\TelkomselPlnController;
use App\Http\Controllers\AxisController;
use App\Http\Controllers\AxisPlnController;
use App\Http\Controllers\SmartfrenController;
use App\Http\Controllers\SmartfrenPlnController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\XlController;
use App\Http\Controllers\XlPlnController;
use App\Http\Controllers\ThreeController;
use App\Http\Controllers\ThreePlnController;
use App\Http\Controllers\MtixController;
use App\Http\Controllers\TixController;
use App\Http\Controllers\PlnController;
use App\Http\Controllers\PlnPlnController;
use App\Http\Controllers\KvisionPlnController;
use App\Http\Controllers\CherryController;
use App\Http\Controllers\DigicashController;
use App\Http\Controllers\GarenaController;
use App\Http\Controllers\GemscoolController;
use App\Http\Controllers\GeonController;
use App\Http\Controllers\IahController;
use App\Http\Controllers\ItunesController;
use App\Http\Controllers\LytoController;
use App\Http\Controllers\MegaxusController;
use App\Http\Controllers\MogplayController;
use App\Http\Controllers\PlaystationController;
use App\Http\Controllers\MolController;
use App\Http\Controllers\PtsController;
use App\Http\Controllers\SteamController;
use App\Http\Controllers\VcoinController;
use App\Http\Controllers\ZyngaController;
use App\Http\Controllers\MlbbController;
use App\Http\Controllers\VoucherGamesController;
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

Route::get('/pln-setting', function () {
    return view('/dashboard/pln/pln-setting', [
        "title" => "PLN Setting"
    ]);
});

Route::get('/voucher-games-setting', function () {
    return view('/dashboard/voucher-games/voucher-games-setting', [
        "title" => "Voucher Games Setting"
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

Route::resource('slider', SliderController::class);

Route::resource('indosat-pln', IndosatPlnController::class);

Route::resource('telkomsel-pln', TelkomselPlnController::class);

Route::resource('axis-pln', AxisPlnController::class);

Route::resource('xl-pln', XlPlnController::class);

Route::resource('smartfren-pln', SmartfrenPlnController::class);

Route::resource('three-pln', ThreePlnController::class);

Route::resource('pln-pln', PlnPlnController::class);

Route::resource('kvision-pln', KvisionPlnController::class);

Route::resource('cherry-voucher-games', CherryController::class);

Route::resource('digicash-voucher-games', DigicashController::class);

Route::resource('garena-voucher-games', GarenaController::class);

Route::resource('gemscool-voucher-games', GemscoolController::class);

Route::resource('geon-voucher-games', GeonController::class);

Route::resource('iah-voucher-games', IahController::class);

Route::resource('itunes-voucher-games', ItunesController::class);

Route::resource('lyto-voucher-games', LytoController::class);

Route::resource('megaxus-voucher-games', MegaxusController::class);

Route::resource('mogplay-voucher-games', MogplayController::class);

Route::resource('playstation-voucher-games', PlaystationController::class);

Route::resource('mol-voucher-games', MolController::class);

Route::resource('pts-voucher-games', PtsController::class);

Route::resource('steam-voucher-games', SteamController::class);

Route::resource('vcoin-voucher-games', VcoinController::class);

Route::resource('zynga-voucher-games', ZyngaController::class);

Route::resource('ml-voucher-games', MlbbController::class);

Route::get('pulsa-telepon', [PulsaController::class, 'index']);

Route::get('pln-tv-kabel', [PlnController::class, 'index']);

Route::get('voucher-games', [VoucherGamesController::class, 'index']);
