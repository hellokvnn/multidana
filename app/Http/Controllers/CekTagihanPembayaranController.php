<?php

namespace App\Http\Controllers;

use App\Models\CekTagihanPembayaran;
use Illuminate\Http\Request;

class CekTagihanPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.format.cek-tagihan-pembayaran.index', [
            "title" => "Cek Tagihan Pembayaran",
            "cektagihanpembayarans" => CekTagihanPembayaran::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('dashboard.format.cek-tagihan-pembayaran.edit', [
            "title" => "Cek Tagihan Pembayaran Edit",
            'cektagihanpembayaran' => CekTagihanPembayaran::find($id)
        ]);
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
        $cektagihanpembayaran = CekTagihanPembayaran::find($id);

        $cektagihanpembayaran->update($request->all());
        return redirect('cek-tagihan-pembayaran-format')-> with('status', 'Data Berhasil Diubah !');
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
