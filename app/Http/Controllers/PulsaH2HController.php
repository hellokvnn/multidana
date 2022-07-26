<?php

namespace App\Http\Controllers;

use App\Models\PulsaH2H;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PulsaH2HController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Pulsa H2H Setting";
        $data = PulsaH2H::all();

        return view('dashboard.pulsa-h2h-setting', [
            'title' => $title,    
            'data' => $data
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
        $data = DB::table('pulsa_h2h_item')
                    ->join('detail_pulsa_h2h', 'pulsa_h2h_item.id', '=', 'detail_pulsa_h2h.pulsa_h2h_item_id')
                    ->select('pulsa_h2h_item.id', 'pulsa_h2h_item.title', 'pulsa_h2h_item.image')
                    ->where('detail_pulsa_h2h.pulsa_h2h_id', '=', $id)
                    ->get();
    
        return view('dashboard.pulsa-h2h.edit', [
            'title' => "Pulsa H2H Setting",
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

    public function detail($id) {
        $data = DB::table('detail_pulsa_h2h_item')
                    ->join('pulsa_h2h_item', 'detail_pulsa_h2h_item.pulsa_h2h_item_id', '=', 'pulsa_h2h_item.id')
                    ->select('detail_pulsa_h2h_item.*', 'pulsa_h2h_item.title')
                    ->where('pulsa_h2h_item.id', '=', $id)
                    ->get();

        return view('dashboard.pulsa-h2h.detail', [
            'title' => 'Pulsa H2H Setting',
            'data' => $data
        ]);
    }
}
