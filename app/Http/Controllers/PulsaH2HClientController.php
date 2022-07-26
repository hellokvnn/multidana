<?php

namespace App\Http\Controllers;

use App\Models\PulsaH2H;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PulsaH2HClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // echo $id;

        $title = "Pulsa H2H Setting";
        // $data = DB::table('detail_pulsa_h2h_item')
        //             ->join('pulsa_h2h_item', 'detail_pulsa_h2h_item.pulsa_h2h_item_id', '=', 'pulsa_h2h_item.id')
        //             ->join('detail_pulsa_h2h', 'pulsa_h2h_item.id', '=', 'detail_pulsa_h2h.pulsa_h2h_item_id')
        //             ->join('pulsa_h2h', 'detail_pulsa_h2h.pulsa_h2h_id', '=', 'pulsa_h2h.id')
        //             ->select('pulsa_h2h_item.title as item', 'pulsa_h2h.id', 'pulsa_h2h.title as title')
        //             ->where('detail_pulsa_h2h.pulsa_h2h_id', '=', $id)
        //             ->get();

        // $data = DB::table('pulsa_h2h')
        //             ->join('detail_pulsa_h2h', 'pulsa_h2h.id', '=', 'detail_pulsa_h2h.pulsa_h2h_id')
        //             ->join('pulsa_h2h_item', function($join) {
        //                 $join->on('pulsa_h2h_item.id', '=', 'detail_pulsa_h2h.pulsa_h2h_item_id');
        //             })
        //             ->join('detail_pulsa_h2h_item', 'pulsa_h2h_item.id', '=', 'detail_pulsa_h2h_item.pulsa_h2h_item_id')
        //             ->select('pulsa_h2h.title as title', 'pulsa_h2h.desc as desc', 'pulsa_h2h_item.image', 'pulsa_h2h_item.title as item_title', 'detail_pulsa_h2h_item.kode', 'pulsa_h2h_item.id as item_id')
        //             ->where('pulsa_h2h.id', '=', $id)
        //             ->get();

        $data = DB::table('pulsa_h2h')
                    ->join('detail_pulsa_h2h', 'pulsa_h2h.id', '=', 'detail_pulsa_h2h.pulsa_h2h_id')
                    ->join('pulsa_h2h_item', function($join) {
                        $join->on('pulsa_h2h_item.id', '=', 'detail_pulsa_h2h.pulsa_h2h_item_id');
                    })
                    ->select('pulsa_h2h.title', 'pulsa_h2h.desc', 'pulsa_h2h_item.title as item_title', 'pulsa_h2h_item.id as item_id', 'pulsa_h2h_item.image')
                    ->where('pulsa_h2h.id', '=', $id)
                    ->get();

        // dd($data->toArray());
    
        return view('pulsa-h2h', [
            'title' => $title,
            'data' => $data,
        ]);
        // $data = PulsaH2H::all();

        // return view('dashboard.pulsa-h2h-setting', [
        //     'title' => $title,    
        //     'data' => $data
        // ]);
    }
}
