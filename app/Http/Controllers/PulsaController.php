<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indosat;
use App\Models\Telkomsel;
use App\Models\Axis;
use App\Models\Mtix;
use App\Models\Smartfren;
use App\Models\Three;
use App\Models\Tix;
use App\Models\Xl;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pulsa-telepon', [
            "title" => "Pulsa Telepon",
            "telkomsels" => Telkomsel::all(),
            "indosats" => Indosat::all(),
            "axes" => Axis::all(),
            "xls" => Xl::all(),
            "smartfrens" => Smartfren::all(),
            "threes" => Three::all(),
            "mtixes" => Mtix::all(),
            "tixes" => Tix::all()
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
