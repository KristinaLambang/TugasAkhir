<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;
use App\LaporanLeger;
use App\GuruKelas;
use App\Kelas;
use App\DataNilai;
use App\Siswa;
use App\Mapel;
use App\Walas;
use PDF;

class LaporanLegerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('masterdata.laporan.leger.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.laporan.leger.form');
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

    public function preview_leger($id_Kelas)
    {
        $dataNilai = DataNilai::all();
        $mapel = Mapel::all();
        $absensi = Absensi::all();
        $siswa = Siswa::where('nama_kelas', $id_Kelas)->get();
        $walas = Walas::where('id_kelas', $id_Kelas)->first();
        $kelas = Kelas::where('id_kelas', $id_Kelas)->first();
        $pdf = PDF::loadView('masterdata.laporan.leger.cetak_leger', compact('siswa', 'dataNilai', 'mapel', 'absensi', 'walas', 'kelas'), [], ['format' => 'A4-L']);
        return $pdf->stream('Leger.pdf');
    }
}
