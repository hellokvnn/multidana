<?php

namespace App\Http\Controllers;

use App\Models\AxisPln;
use App\Models\IndosatPln;
use App\Models\KvisionPln;
use App\Models\PlnPln;
use App\Models\SmartfrenPln;
use App\Models\TelkomselPln;
use App\Models\ThreePln;
use App\Models\XlPln;
use Illuminate\Http\Request;

class PlnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pln-tv-kabel', [
            "title" => "PLN TV Kabel",
            "telkomselplns" => TelkomselPln::all(),
            "indosatplns" => IndosatPln::all(),
            "axisplns" => AxisPln::all(),
            "xlplns" => XlPln::all(),
            "smartfrenplns" => SmartfrenPln::all(),
            "threeplns" => ThreePln::all(),
            "plnplns" => PlnPln::all(),
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
        //
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
        //
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
