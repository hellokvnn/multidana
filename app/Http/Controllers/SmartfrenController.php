<?php

namespace App\Http\Controllers;

use App\Models\Smartfren;
use Illuminate\Http\Request;

class SmartfrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pulsa.smartfren.index', [
            "title" => "Smartfren Retail",
            "smartfrens" => Smartfren::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $smartfrens = Smartfren::all(); 
        return view('dashboard.pulsa.smartfren.create', compact('smartfrens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Smartfren::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga
        ]);
        return redirect('smartfren-retail')->with('status', 'Data Berhasil Ditambah !');
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
        return view('dashboard.pulsa.smartfren.edit', [
            "title" => "Smartfren Edit",
            'smartfren' => Smartfren::find($id)
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
        $smartfren = Smartfren::find($id);

        $smartfren->update($request->all());
        return redirect('smartfren-retail')-> with('status', 'Data Berhasil Diubah !');
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
