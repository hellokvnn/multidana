<?php

namespace App\Http\Controllers;

use App\Models\TelkomselPln;
use Illuminate\Http\Request;

class TelkomselPlnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pln.telkomsel.index', [
            "title" => "Telkomsel PLN",
            "telkomselplns" => TelkomselPln::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telkomselplns = TelkomselPln::all(); 
        return view('dashboard.pln.telkomsel.create', compact('telkomselplns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TelkomselPln::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('telkomsel-pln')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.pln.telkomsel.edit', [
            "title" => "Telkomsel PLN Edit",
            'telkomselpln' => TelkomselPln::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelkomselPln $telkomselpln, $id)
    {
        $telkomselpln = TelkomselPln::find($id);

        $telkomselpln->update($request->all());
        return redirect('telkomsel-pln')-> with('status', 'Data Berhasil Diubah !');
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
