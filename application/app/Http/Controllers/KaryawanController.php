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
        Karyawan::create($request->all());
        return redirect('/karyawan')->with('status', 'Data berhasil ditambahkan!');
        // Karyawan::create([
        //     'npp' => $request->npp,
        //     'nama' => $request->nama,
        //     'tgl_lahir' => $request->tanggal_lahir,
        //     'jenjang' => $request->jenjang,
        //     'jabatan' => $request->jabatan,
        //     'wilayah' => $request->wilayah,
        //     'singkatan' => $request->singkatan,
        //     'unit' => $request->unit,
        //     'unit_besaran' => $request->unit_besaran,
        //     'link_img' => $request->link_img,
        // ]);

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
