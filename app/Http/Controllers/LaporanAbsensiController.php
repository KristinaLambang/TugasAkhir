<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanAbsensi;

class LaporanAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = LaporanAbsensi::all();
        return view('masterdata.laporan.absensi.index', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absensi = LaporanAbsensi::all();
        return view('masterdata.laporan.absensi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LaporanAbsensi::create([
                'nis' => $request->nis,
                'nama_siswa' => $request->nama_siswa,
                'alpa' => $request->alpa,
                'ijin' => $request->ijin,
                'sakit' => $request->sakit,
            ]);

        return redirect()->route('laporan.absensi.index');
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
        $absensi = LaporanAbsensi::find($id);
        return view('masterdata.laporan.absensi.edit',compact('id','absensi'));
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
