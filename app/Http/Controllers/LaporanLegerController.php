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
use DB;

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
        $dataNilai=DB::table('tb_nilai')
        ->select('tb_nilai.id_mapel','tb_nilai.id_siswa','tb_nilai.id_Kelas','tb_nilai.nilai_raport','tb_nilai.nilai_keterampilan',DB::raw('sum(tb_nilai.total_nilai) as TOTAL_NILAI'))
        ->orderBy(DB::raw('TOTAL_NILAI'),'DESC')
        ->groupBy('tb_nilai.id_mapel','tb_nilai.id_siswa','tb_nilai.id_Kelas','tb_nilai.nilai_raport','tb_nilai.nilai_keterampilan')
        ->get();

        // dd($dataNilai);

        $mapel = Mapel::all();
        $absensi = Absensi::all();
        $siswa = DB::table('tb_siswa')
        ->where('tb_siswa.nama_kelas', $id_Kelas)
        ->join('tb_nilai','tb_nilai.id_siswa','=','tb_siswa.id_siswa')
        ->select('tb_siswa.id_siswa','tb_siswa.nis','tb_siswa.nama_siswa','tb_siswa.jenis_kelamin',DB::raw('sum(tb_nilai.total_nilai) as TOTAL_NILAI'))
        ->groupBy('tb_siswa.id_siswa','tb_siswa.nis','tb_siswa.nama_siswa','tb_siswa.jenis_kelamin')
        ->orderBy('TOTAL_NILAI','DESC')
        ->get();

        // dd($siswa);

        $walas = Walas::where('id_kelas', $id_Kelas)->first();
        $kelas = Kelas::where('id_kelas', $id_Kelas)->first();

        $pdf = PDF::loadView('masterdata.laporan.leger.cetak_leger', compact('siswa', 'dataNilai', 'mapel', 'absensi', 'walas', 'kelas'), [], ['format' => 'A4-L']);
        return $pdf->stream('Leger.pdf');
    }
}
