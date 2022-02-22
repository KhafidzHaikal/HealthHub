<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use App\Models\kategori;
use Illuminate\Http\Request;

class DashboardApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.apotek.index', [
            'title' =>'Data Apotek',
            'apotek' => Apotek::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.apotek.create',[
            'title' => 'Tambah Apotek',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_apotek' => 'required',
            'alamat_apotek' => 'required',
            'no_telp_apotek' => 'required|max:13',
            'obat' => 'required',
            'kategori' => 'required',
            'harga' => 'required'
        ]);

        Apotek::create($validatedata);

        return redirect('/apotek')->with('success', 'Apotek Baru Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function show(Apotek $apotek)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function edit(Apotek $apotek)
    {
        // dd($apotek);
        return view('dashboard.apotek.edit', [
            'title' => 'Edit Apotek',
            'apotek' => $apotek
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apotek $apotek)
    {
        $rules =[
            'nama_apotek' => 'required',
            'alamat_apotek' => 'required',
            'no_telp_apotek' => 'required|max:13',
            'obat' => 'required',
            'kategori' => 'required',
            'harga' => 'required'
        ];

        $validatedata = $request->validate($rules);
        $id = $request->id;
        $updateapotek = Apotek::find($id);
        $updateapotek->update($request->all());
        return redirect('/apotek')->with('success', 'Apotek Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apotek $apotek)
    {
        Apotek::destroy($apotek->id);
        return redirect('/apotek')->with('success', 'Apotek Baru Dihapus');
    }
}
