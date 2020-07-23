<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawan= Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $karyawan= Karyawan::where('nama', 'like', '%' . $request->nama . '%')->orderBy('id');
        dump($karyawan);
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('karyawan.create');
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
        $request->validate([
            'npp' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenjang' => 'required',
            'jabatan' => 'required',
            'wilayah' => 'required',
            'singkatan' => 'required',
            'unit' => 'required',
            'unit_besaran' => 'required',
            'link_img' => 'required',
        ]);
        Karyawan::create($request->all());
        return redirect('/karyawan')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
        Karyawan::where('id', $karyawan->id)->update([
            'npp' => $request->npp,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tanggal_lahir,
            'jenjang' => $request->jenjang,
            'jabatan' => $request->jabatan,
            'wilayah' => $request->wilayah,
            'singkatan' => $request->singkatan,
            'unit' => $request->unit,
            'unit_besaran' => $request->unit_besaran,
            'link_img' => $request->link_img,
        ]);
        return redirect('/karyawan') ->with('status', 'Data karyawan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
        Karyawan::destroy($karyawan->id);
        return redirect('/karyawan') ->with('status', 'Data karyawan berhasil dihapus');
    }
}
