<?php

namespace App\Http\Controllers;

use App\Models\DanaTopup;
use App\Models\EtoolTopup;
use App\Models\GojekTopup;
use App\Models\GopayTopup;
use App\Models\GrabTopup;
use App\Models\OvoTopup;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topup-e-money', [
            "title" => "Topup E-Money",
            "gopaytopups" => GopayTopup::all(),
            "ovotopups" => OvoTopup::all(),
            "etooltopups" => EtoolTopup::all(),
            "danatopups" => DanaTopup::all(),
            "gojektopups" => GojekTopup::all(),
            "grabtopups" => GrabTopup::all(),
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
