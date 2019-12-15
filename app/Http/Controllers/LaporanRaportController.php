<?php

namespace App\Http\Controllers;

use App\DataNilai;
use PDF;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class LaporanRaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('masterdata.laporan.raport.index', compact('kelas', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.laporan.raport.create');
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

    public function preview_raport($id_siswa)
    {
        $siswa = Siswa::where('id_siswa', $id_siswa)->first();
        $nilaiFirst = DataNilai::where('id_siswa', $id_siswa)->first();
        
        $pdf = PDF::loadView('masterdata.laporan.raport.cetak_raport', compact('siswa', 'nilaiFirst'));
        return $pdf->stream('Raport.pdf');
    }
}
