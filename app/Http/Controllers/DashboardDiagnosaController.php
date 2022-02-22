<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\kategori;
use Illuminate\Http\Request;

class DashboardDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.diagnosa.index', [
            'title' =>'Data Diagnosa',
            'diagnosa' => Diagnosa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.diagnosa.create',[
            'title' => 'Tambah Diagnosa',
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
            'nama_penyakit' => 'required',
            'kategori' => 'required',
            'gejala' => 'required'
        ]);

        Diagnosa::create($validatedata);

        return redirect('/diagnosa')->with('success', 'Diagnosa Baru Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosa $diagnosa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosa $diagnosa)
    {
        // dd($diagnosa);
        return view('dashboard.diagnosa.edit', [
            'title' => 'Edit Diagnosa',
            'diagnosa' => $diagnosa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosa $diagnosa)
    {
        $rules =[
            'nama_penyakit' => 'required',
            'kategori' => 'required',
            'gejala' => 'required'
        ];

        $validatedata = $request->validate($rules);
        $id = $request->id;
        $updatediagnosa = Diagnosa::find($id);
        $updatediagnosa->update($request->all());
        return redirect('/diagnosa')->with('success', 'Diagnosa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosa $diagnosa)
    {
        Diagnosa::destroy($diagnosa->id);
        return redirect('/diagnosa')->with('success', 'Diagnosa Baru Dihapus');
    }
}
