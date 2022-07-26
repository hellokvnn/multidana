<?php

namespace App\Http\Controllers;

use App\Models\DetailPulsaH2HItem;
use App\Models\PulsaH2HItem;
use Illuminate\Http\Request;

class PulsaH2HItemAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DetailPulsaH2HItem::create([
            'kode' => $request->kode,
            'operator' => $request->operator,
            'harga' => $request->harga,
            'pulsa_h2h_item_id' => $request->id
        ]);

        return redirect()->route('pulsa-h2h-item', ['id' => $request->id])->with('status', 'Data Berhasil Ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.pulsa-h2h-item.create', [
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DetailPulsaH2HItem::findOrFail($id);

        return view('dashboard.pulsa-h2h-item.edit', [
            'title' => 'Edit',
            'data' => $data
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
        $data = DetailPulsaH2HItem::find($id);

        $data->update($request->all());

        return redirect()->route('pulsa-h2h-item', ['id' => $request->pulsa_h2h_item_id])-> with('status', 'Data Berhasil Diubah !');
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
