<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\LaporanLeger;

class LaporanLegerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        // $leger = LaporanLeger::all();
        return view('masterdata.laporanleger.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.laporanleger.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // LaporanLeger::create([
        //         'nis' => $request->nis,
        //         'nama_siswa' => $request->nama_siswa,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'nilai_pengetahuan' => $request->nilai_pengetahuan,
        //         'nilai_keterampilan' => $request->nilai_keterampilan,
        //         'jumlah' => $request->jumlah,
        //         'jumlah_nilai' => $request->jumlah_nilai,
        //         'ranking' => $request->ranking,
        //     ]);

        // return redirect()->route('laporan.leger.index');
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
        // $laporanleger = LaporanLeger::find($id);
        // return view('masterdata.laporan.leger.edit',compact('id','laporanleger'));
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
        // $laporanleger = LaporanLeger::find($id);
        // $laporanleger->update([
        //         'nis' => $request->nis,
        //         'nama_siswa' => $request->nama_siswa,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'nilai_pengetahuan' => $request->nilai_pengetahuan,
        //         'nilai_keterampilan' => $request->nilai_keterampilan,
        //         'jumlah' => $request->jumlah,
        //         'jumlah_nilai' => $request->jumlah_nilai,
        //         'ranking' => $request->ranking,
        //     ]);

        // return redirect()->route('laporan.leger.index');
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
