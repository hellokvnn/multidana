<?php

namespace App\Http\Controllers;

use App\Models\Indosat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
use PHPUnit\Framework\Constraint\Operator;

class IndosatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pulsa.indosat.index', [
            "title" => "Indosat Retail",
            "indosats" => Indosat::all()
        ]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indosats = Indosat::all(); 
        return view('dashboard.pulsa.indosat.create', compact('indosats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Indosat::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('indosat-retail')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.pulsa.indosat.edit', [
            "title" => "Indosat Edit",
            'indosat' => Indosat::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indosat $indosat, $id)
    {
        $indosat = Indosat::find($id);

        $indosat->update($request->all());
        return redirect('indosat-retail')-> with('status', 'Data Berhasil Diubah !');
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
