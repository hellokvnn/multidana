<?php

namespace App\Http\Controllers;

use App\Models\KvisionPln;
use Illuminate\Http\Request;

class KvisionPlnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pln.kvision.index', [
            "title" => "Kvision PLN",
            "kvisionplns" => KvisionPln::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kvisionplns = KvisionPln::all(); 
        return view('dashboard.pln.kvision.create', compact('kvisionplns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KvisionPln::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('kvision-pln')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.pln.kvision.edit', [
            "title" => "KvisionPLN Edit",
            'kvisionpln' => KvisionPln::find($id)
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
        $kvisionpln = KvisionPln::find($id);

        $kvisionpln->update($request->all());
        return redirect('indosat-pln')-> with('status', 'Data Berhasil Diubah !');
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
