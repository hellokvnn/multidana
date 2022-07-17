<?php

namespace App\Http\Controllers;

use App\Models\Cherry;
use App\Models\Digicash;
use App\Models\Garena;
use App\Models\Gemscool;
use App\Models\Geon;
use App\Models\Iah;
use App\Models\Itunes;
use App\Models\Lyto;
use App\Models\Megaxus;
use App\Models\Mlbb;
use App\Models\Mogplay;
use App\Models\Mol;
use App\Models\Playstation;
use App\Models\Pts;
use App\Models\Steam;
use App\Models\Vcoin;
use App\Models\Zynga;
use Illuminate\Http\Request;

class VoucherGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voucher-games', [
            "title" => "Voucher Games",
            "cherries" => Cherry::all(),
            "digicashes" => Digicash::all(),
            "garenas" => Garena::all(),
            "gemscools" => Gemscool::all(),
            "geons" => Geon::all(),
            "iahs" => Iah::all(),
            "itunes" => Itunes::all(),
            "lytos" => Lyto::all(),
            "megaxuses" => Megaxus::all(),
            "mlbbs" => Mlbb::all(),
            "mogplays" => Mogplay::all(),
            "mols" => Mol::all(),
            "playstations" => Playstation::all(),
            "pts" => Pts::all(),
            "steams" => Steam::all(),
            "vcoins" => Vcoin::all(),
            "zyngas" => Zynga::all()
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
