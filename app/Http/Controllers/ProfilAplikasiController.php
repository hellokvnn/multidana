<?php

namespace App\Http\Controllers;

use App\Models\ProfilAplikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profil-aplikasi.index', [
            "title" => "Profil Aplikasi",
            "profilaplikasis" => ProfilAplikasi::all()
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
        return view('dashboard.profil-aplikasi.edit', [
            "title" => "Profil Aplikasi Edit",
            'profilaplikasi' => ProfilAplikasi::find($id)
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
        $profilaplikasi = ProfilAplikasi::find($id);

        if ($request->file('foto') == null) {
            $profilaplikasi->update([
                'text' => $request->text,
                'link' => $request->link,
            ]);

            return redirect('profil-aplikasi-setting')-> with('status', 'Data Berhasil Diubah !');
        }else{
            $path = $request->file('foto')->store('slider');
            $path = Storage::putFile('slider', $request->file('foto'));
        }

        $profilaplikasi->update([
            'text' => $request->text,
            'link' => $request->link,
            'foto' => $path
        ]);

        return redirect('profil-aplikasi-setting')-> with('status', 'Data Berhasil Diubah !');
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
