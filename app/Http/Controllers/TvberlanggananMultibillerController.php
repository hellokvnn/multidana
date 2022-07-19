<?php

namespace App\Http\Controllers;

use App\Models\TvberlanggananMultibiller;
use Illuminate\Http\Request;

class TvberlanggananMultibillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.multibiller.tvberlangganan.index', [
            "title" => "TV Multibiller",
            "tvberlanggananmultibillers" => TvberlanggananMultibiller::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tvberlanggananmultibillers = TvberlanggananMultibiller::all(); 
        return view('dashboard.multibiller.tvberlangganan.create', compact('tvberlanggananmultibillers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TvberlanggananMultibiller::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('tvberlangganan-multibiller')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.multibiller.tvberlangganan.edit', [
            "title" => "TV Multibiller Edit",
            'tvberlanggananmultibiller' => TvberlanggananMultibiller::find($id)
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
        $tvberlanggananmultibiller = TvberlanggananMultibiller::find($id);

        $tvberlanggananmultibiller->update($request->all());
        return redirect('tvberlangganan-multibiller')-> with('status', 'Data Berhasil Diubah !');
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
