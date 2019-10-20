<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNilai;
use App\Siswa;
use DataTables;

class DataNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datanilai = DataNilai::all();
        return view('masterdata.datanilai.index');
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa=Siswa::all();
        return view('masterdata.datanilai.form',compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataNilai::create([
                'nis' => $request->nis,
                'tugas_1' => $request->tugas_1,
                'tugas_2' => $request->tugas_2,
                'ulangan_harian_1' => $request->ulangan_harian_1,
                'ulangan_harian_2' => $request->ulangan_harian_2,
                'uts' => $request->uts,
                'uas' => $request->uas,
                'nilai_raport' => $request->nilai_raport,
                'nilai_keterampilan' => $request->nilai_keterampilan,
                'deskripsi' => $request->deskripsi,
                'deskripsi' => $request->deskripsi,
            ]);

        return redirect()->route('datanilai.index');
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
        //
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
        DataNilai::create([
                'nis' => $request->nis,
                'tugas_1' => $request->tugas_1,
                'tugas_2' => $request->tugas_2,
                'ulangan_harian_1' => $request->ulangan_harian_1,
                'ulangan_harian_2' => $request->ulangan_harian_2,
                'uts' => $request->uts,
                'uas' => $request->uas,
                'nilai_raport' => $request->nilai_raport,
                'nilai_keterampilan' => $request->nilai_keterampilan,
                'deskripsi' => $request->deskripsi,
                'deskripsi' => $request->deskripsi,
            ]);

        return redirect()->route('datanilai.index');
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
