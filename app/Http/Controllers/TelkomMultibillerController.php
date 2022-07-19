<?php

namespace App\Http\Controllers;

use App\Models\TelkomMultibiller;
use Illuminate\Http\Request;

class TelkomMultibillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.multibiller.telkom.index', [
            "title" => "Telkom Multibiller",
            "telkommultibillers" => TelkomMultibiller::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telkommultibillers = TelkomMultibiller::all(); 
        return view('dashboard.multibiller.telkom.create', compact('telkommultibillers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TelkomMultibiller::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('telkom-multibiller')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.multibiller.telkom.edit', [
            "title" => "Telkom Multibiller Edit",
            'telkommultibiller' => TelkomMultibiller::find($id)
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
        $telkommultibiller = TelkomMultibiller::find($id);

        $telkommultibiller->update($request->all());
        return redirect('telkom-multibiller')-> with('status', 'Data Berhasil Diubah !');
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
