<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNilai;
use App\Kelas;
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
    // public function index()
    // {
    //     $datanilai = DataNilai::all();
    //     return view('masterdata.datanilai.index');
    // }

    public function list($kelas, $mapel)
    {
        $kelas = $kelas;
        $mapel = $mapel;
        $datanilai = DataNilai::where('id_mapel', $mapel)->where('id_kelas', $kelas)->get();
        return view('masterdata.datanilai.list',compact('datanilai', 'kelas', 'mapel'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kelas, $id_mapel)
    {
        
        $login=Auth::user()->name;
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        $id_mapel=$id_mapel;
        $id_kelas=$id_kelas;
        // $siswa=DB::table('tb_siswa as siswa')
        // ->join('tb_kelas','tb_kelas.nama_kelas','=','siswa.nama_kelas')
        // ->join('tb_guru_kelas','tb_guru_kelas.id_kelas','=','tb_kelas.id_kelas')
        // ->join('tb_guru_mapel','tb_guru_mapel.id_guru_mapel','=','tb_guru_kelas.id_guru_mapel')
        // ->join('users','users.id','=','tb_guru_mapel.id_users_login')
        // ->where('users.id',$login)
        // ->select('siswa.*')
        // ->get();
        return view('masterdata.datanilai.form',compact('siswa', 'mapel', 'id_kelas', 'id_mapel'));
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
                'id_mapel' => $request->id_mapel,
                'id_kelas' => $request->id_kelas,
                'id_guru_mapel' => Auth::user()->id,
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

        // return redirect()->route('masterdata.datanilai.list', array('kelas' => $request->id_kelas, 'mapel' => $request->id_mapel);
        $id_kelas = $request->id_kelas;
        $id_mapel = $request->id_mapel;
        return redirect()->route('list_per_kelas_per_mapel', ["kelas" => $id_kelas, "mapel" => $id_mapel]);

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
    public function edit($id_nilai, $id_kelas, $id_mapel)
    {
        $datanilai=DataNilai::find($id_nilai);
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        $id_nilai = $id_nilai;
        $id_mapel = $id_mapel;
        return view('masterdata.datanilai.edit', compact('datanilai', 'siswa', 'mapel', 'id_nilai', 'id_kelas', 'id_mapel'));
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
        $datanilai = DataNilai::find($id);
        $datanilai->update([
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

        $id_kelas = $request->id_kelas;
        $id_mapel = $request->id_mapel;
        return redirect()->route('list_per_kelas_per_mapel', ["kelas" => $id_kelas, "mapel" => $id_mapel]);
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
