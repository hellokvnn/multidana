<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\IndosatController;
use App\Http\Controllers\IndosatPlnController;
use App\Http\Controllers\TelkomselController;
use App\Http\Controllers\TelkomselPlnController;
use App\Http\Controllers\AxisController;
use App\Http\Controllers\AxisPlnController;
use App\Http\Controllers\SmartfrenController;
use App\Http\Controllers\SmartfrenPlnController;
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
use App\Http\Controllers\PlnMultibillerController;
use App\Http\Controllers\TelkomMultibillerController;
use App\Http\Controllers\PdamMultibillerController;
use App\Http\Controllers\BpjsMultibillerController;
use App\Http\Controllers\FinanceMultibillerController;
use App\Http\Controllers\PostpaidMultibillerController;
use App\Http\Controllers\TvberlanggananMultibillerController;
use App\Http\Controllers\GopayTopupController;
use App\Http\Controllers\OvoTopupController;
use App\Http\Controllers\EtoolTopupController;
use App\Http\Controllers\DanaTopupController;
use App\Http\Controllers\GojekTopupController;
use App\Http\Controllers\GrabTopupController;
use App\Http\Controllers\MultibillerController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TransaksiPulsaController;
use App\Http\Controllers\CekSaldoController;
use App\Http\Controllers\DepositViaTiketController;
use App\Http\Controllers\GantiPinController;
use App\Http\Controllers\RekapTransaksiController;
use App\Http\Controllers\KomplainFormatController;
use App\Http\Controllers\CekTagihanPembayaranController;
use App\Http\Controllers\PembayaranPascabayarController;
use App\Http\Controllers\CekHargaProdukController;
use App\Http\Controllers\TransferDepositController;
use App\Http\Controllers\MarkupGlobalController;
use App\Http\Controllers\MarkupSpesifikController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CustomerServiceSettingController;
use App\Http\Controllers\KomplainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PulsaH2HClientController;
use App\Http\Controllers\PulsaH2HController;
use App\Http\Controllers\PulsaH2HItemAdminController;
use App\Http\Controllers\TiketKeretaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProfilAplikasiController;
use App\Http\Controllers\FooterController;
use App\Models\PulsaH2H;
use App\Models\Footer;

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

Route::get('/format-setting', function () {
    return view('/dashboard/format-setting', [
        "title" => "Format Setting"
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

Route::get('/multibiller-setting', function () {
    return view('/dashboard/multibiller/multibiller-setting', [
        "title" => "Multibiller Setting"
    ]);
});

Route::get('/topup-e-money-setting', function () {
    return view('/dashboard/topupemoney/topup-e-money-setting', [
        "title" => "Topup E-Money Setting"
    ]);
});

Route::get('/slider-setting', function () {
    return view('/dashboard/slider', [
        "title" => "Slider Setting"
    ]);
});


Route::middleware(['auth'])->group(function(){
    Route::resource('dashboard', DashboardController::class);

    Route::resource('indosat-retail', IndosatController::class);

    Route::resource('telkomsel-retail', TelkomselController::class);

    Route::resource('axis-retail', AxisController::class);

    Route::resource('smartfren-retail', SmartfrenController::class);

    Route::resource('xl-retail', XlController::class);

    Route::resource('three-retail', ThreeController::class);

    Route::resource('mtix-retail', MtixController::class);

    Route::resource('tix-retail', TixController::class);

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

    Route::resource('pln-multibiller', PlnMultibillerController::class);

    Route::resource('telkom-multibiller', TelkomMultibillerController::class);

    Route::resource('pdam-multibiller', PdamMultibillerController::class);

    Route::resource('bpjs-multibiller', BpjsMultibillerController::class);

    Route::resource('finance-multibiller', FinanceMultibillerController::class);

    Route::resource('postpaid-multibiller', PostpaidMultibillerController::class);

    Route::resource('tvberlangganan-multibiller', TvberlanggananMultibillerController::class);

    Route::resource('gopay-topup', GopayTopupController::class);

    Route::resource('ovo-topup', OvoTopupController::class);

    Route::resource('etool-topup', EtoolTopupController::class);

    Route::resource('dana-topup', DanaTopupController::class);

    Route::resource('gojek-topup', GojekTopupController::class);

    Route::resource('grab-topup', GrabTopupController::class);

    Route::resource('transaksi-pulsa-format', TransaksiPulsaController::class);

    Route::resource('cek-saldo-format', CekSaldoController::class);

    Route::resource('deposit-via-tiket-format', DepositViaTiketController::class);

    Route::resource('ganti-pin-format', GantiPinController::class);

    Route::resource('rekap-transaksi-format', RekapTransaksiController::class);

    Route::resource('komplain-format', KomplainFormatController::class);

    Route::resource('cek-tagihan-pembayaran-format', CekTagihanPembayaranController::class);

    Route::resource('pembayaran-pascabayar-format', PembayaranPascabayarController::class);

    Route::resource('cek-harga-produk-format', CekHargaProdukController::class);

    Route::resource('transfer-deposit-format', TransferDepositController::class);

    Route::resource('markup-global-format', MarkupGlobalController::class);

    Route::resource('markup-spesifik-format', MarkupSpesifikController::class);

    Route::resource('slider-setting', SliderController::class);

    Route::resource('customer-service-setting', CustomerServiceSettingController::class);

    Route::resource('komplain', KomplainController::class);

    Route::resource('pulsa-h2h-setting', PulsaH2HController::class);

    Route::get('pulsa-h2h-item/{id}', [PulsaH2HController::class, 'detail'])->name('pulsa-h2h-item');

    Route::resource('pulsa-h2h-item-setting', PulsaH2HItemAdminController::class);

    Route::resource('tiket-kereta-setting', TiketKeretaController::class);

    Route::resource('layanan-setting', LayananController::class);

    Route::resource('tentang-setting', TentangController::class);

    Route::resource('profil-aplikasi-setting', ProfilAplikasiController::class);

    Route::resource('footer-setting', FooterController::class);

});

Route::get('pulsa-h2h-list/{id}', [PulsaH2HClientController::class, 'index']);

Route::get('pulsa-telepon', [PulsaController::class, 'index']);

Route::get('pln-tv-kabel', [PlnController::class, 'index']);

Route::get('voucher-games', [VoucherGamesController::class, 'index']);

Route::get('produk-multibiller', [MultibillerController::class, 'index']);

Route::get('topup-e-money', [TopupController::class, 'index']);

Route::get('tiket-kereta', [TiketKeretaController::class, 'index2']);

Route::get('', [MainController::class, 'index']);

Route::resource('', MainController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
