<?php

namespace App\Http\Controllers;

use App\Models\PembayaranPascabayar;
use Illuminate\Http\Request;

class PembayaranPascabayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.format.pembayaran-pascabayar.index', [
            "title" => "Pembayaran Pascabayar",
            "pembayaranpascabayars" => PembayaranPascabayar::all()
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
        return view('dashboard.format.pembayaran-pascabayar.edit', [
            "title" => "Pembayaran Pascabayar Edit",
            'pembayaranpascabayar' => PembayaranPascabayar::find($id)
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
        $pembayaranpasacabayar = PembayaranPascabayar::find($id);

        $pembayaranpasacabayar->update($request->all());
        return redirect('pembayaran-pascabayar-format')-> with('status', 'Data Berhasil Diubah !');
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
