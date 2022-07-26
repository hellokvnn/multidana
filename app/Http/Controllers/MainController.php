<?php

namespace App\Http\Controllers;

use App\Models\CekHargaProduk;
use App\Models\CekSaldo;
use App\Models\CekTagihanPembayaran;
use App\Models\CustomerServiceSetting;
use App\Models\DepositViaTiket;
use App\Models\GantiPin;
use App\Models\KomlainFormat;
use App\Models\Komplain;
use App\Models\MarkupGlobal;
use App\Models\MarkupSpesifik;
use App\Models\PembayaranPascabayar;
use App\Models\RekapTransaksi;
use App\Models\Slider;
use App\Models\TransaksiPulsa;
use App\Models\TransferDeposit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.main', [
            "title" => "Home",
            "transaksipulsas" => TransaksiPulsa::all(),
            "ceksaldos" => CekSaldo::all(),
            "depositviatikets" => DepositViaTiket::all(),
            "gantipins" => GantiPin::all(),
            "rekaptransaksis" => RekapTransaksi::all(),
            "komplainformats" => KomlainFormat::all(),
            "cektagihanpembayarans" => CekTagihanPembayaran::all(),
            "pembayaranpascabayars" => PembayaranPascabayar::all(),
            "cekhargaproduks" => CekHargaProduk::all(),
            "transferdeposits" => TransferDeposit::all(),
            "markupglobals" => MarkupGlobal::all(),
            "markupspesifiks" => MarkupSpesifik::all(),
            "customerservicesettings" => CustomerServiceSetting::all(),
            "komplains" => Komplain::all(),
            "sliders" => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komplains = Komplain::all(); 
        return view('layouts.main', compact('komplains'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Komplain::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'text' => $request->text
        ]);
        return redirect('/')->with('status', 'Komplain Berhasil Dikirim !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
