<?php

namespace App\Http\Controllers;

use App\Models\Telkomsel;
use Illuminate\Http\Request;

class TelkomselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pulsa.telkomsel.index', [
            "title" => "Telkomsel Retail",
            "telkomsels" => Telkomsel::all()
        ]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telkomsels = Telkomsel::all(); 
        return view('dashboard.pulsa.telkomsel.create', compact('telkomsels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Telkomsel::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('telkomsel-retail')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.pulsa.telkomsel.edit', [
            "title" => "Telkomsel Edit",
            'telkomsel' => Telkomsel::find($id)
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
        $telkomsel = Telkomsel::find($id);

        $telkomsel->update($request->all());
        return redirect('telkomsel-retail')-> with('status', 'Data Berhasil Diubah !');
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
