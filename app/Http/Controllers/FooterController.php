<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.footer.index', [
            "title" => "Footer",
            "footers" => Footer::all()
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
        return view('dashboard.footer.edit', [
            "title" => "Footer Edit",
            'footer' => Footer::find($id)
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
        $footer = Footer::find($id);

        if ($request->file('whatsapp') == null) {
            $footer->update([
                'kota' => $request->kota,
                'alamat' => $request->alamat,
                'fax' => $request->telp,
                'email' => $request->email,
                'solution_centre' => $request->solution_centre,
                'link_whatsapp' => $request->link_whatsapp,
                'link_instagram' => $request->link_instagram,
                'link_twitter' => $request->link_twitter,
            ]);

            return redirect('footer-setting')-> with('status', 'Data Berhasil Diubah !');
        }

        if ($request->file('logo') == null) {
            $footer->update([
                'kota' => $request->kota,
                'alamat' => $request->alamat,
                'fax' => $request->telp,
                'email' => $request->email,
                'solution_centre' => $request->solution_centre,
                'whatsapp' => $request->whatsapp,
                'link_whatsapp' => $request->link_whatsapp,
                'link_instagram' => $request->link_instagram,
                'link_twitter' => $request->link_twitter,
            ]);

            return redirect('footer-setting')-> with('status', 'Data Berhasil Diubah !');
        }else{
            $path = $request->file('logo')->store('slider');
            $path = Storage::putFile('slider', $request->file('logo'));
        }

        $footer->update([
            'logo' => $path,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
            'fax' => $request->telp,
            'email' => $request->email,
            'solution_centre' => $request->solution_centre,
            'whatsapp' => $request->whatsapp,
            'link_whatsapp' => $request->link_whatsapp,
            'link_instagram' => $request->link_instagram,
            'link_twitter' => $request->link_twitter,
        ]);

        return redirect('footer-setting')-> with('status', 'Data Berhasil Diubah !');
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
