<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNilai;
use App\Siswa;
use App\Mapel;
use Auth;
use DB;
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
        
        $login=Auth::user()->name;
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        // $siswa=DB::table('tb_siswa as siswa')
        // ->join('tb_kelas','tb_kelas.nama_kelas','=','siswa.nama_kelas')
        // ->join('tb_guru_kelas','tb_guru_kelas.id_kelas','=','tb_kelas.id_kelas')
        // ->join('tb_guru_mapel','tb_guru_mapel.id_guru_mapel','=','tb_guru_kelas.id_guru_mapel')
        // ->join('users','users.id','=','tb_guru_mapel.id_users_login')
        // ->where('users.id',$login)
        // ->select('siswa.*')
        // ->get();
        return view('masterdata.datanilai.form',compact('siswa', 'mapel'));
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
                'id_siswa' => $request->id_siswa,
                'tahun_ajaran' => $request->tahun_ajaran,
                'tugas_1' => $request->tugas_1,
                'tugas_2' => $request->tugas_2,
                'ulangan_harian_1' => $request->ulangan_harian_1,
                'ulangan_harian_2' => $request->ulangan_harian_2,
                'uts' => $request->uts,
                'uas' => $request->uas,
                'nilai_raport' => $request->nilai_raport,
                'nilai_keterampilan' => $request->nilai_keterampilan,
                'deskripsi_pengetahuan' => $request->deskripsi_pengetahuan,
                'deskripsi_keterampilan' => $request->deskripsi_keterampilan,
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
