<?php

namespace App\Http\Controllers;

use App\Models\BpjsMultibiller;
use Illuminate\Http\Request;

class BpjsMultibillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.multibiller.bpjs.index', [
            "title" => "BPJS Multibiller",
            "bpjsmultibillers" => BpjsMultibiller::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bpjsmultibillers = BpjsMultibiller::all(); 
        return view('dashboard.multibiller.bpjs.create', compact('bpjsmultibillers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BpjsMultibiller::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('bpjs-multibiller')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.multibiller.bpjs.edit', [
            "title" => "BPJS Multibiller Edit",
            'bpjsmultibiller' => BpjsMultibiller::find($id)
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
        $bpjsmultibiller = BpjsMultibiller::find($id);

        $bpjsmultibiller->update($request->all());
        return redirect('bpjs-multibiller')-> with('status', 'Data Berhasil Diubah !');
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
