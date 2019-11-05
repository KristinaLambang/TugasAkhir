<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruMapel;
use App\Jadwal;
use App\Kelas;
use App\Mapel;

class JadwalController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        $kelas = Kelas::all();
        $gurumapel = GuruMapel::all();
        $mapel = Mapel::all();
        return view('masterdata.datajadwal.index', compact('jadwal', 'kelas', 'gurumapel', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $guru = GuruMapel::all();
         $kelas = Kelas::all();
         $mapel = Mapel::all();
         $isEdit = FALSE;
        return view('masterdata.datajadwal.form', compact('guru', 'kelas', 'mapel', 'isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwal::create([ 
            'nama_pengajar' => $request->nama_pengajar,
            'nama_kelas' => $request->nama_kelas,
            'nama_mapel' => $request->nama_mapel,
            'hari' => $request->hari,
            'dari_jam' => $request->dari_jam,
            'sampai_jam' => $request->sampai_jam,
        ]);

        return redirect()->route('jadwal.index');
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
        $jadwal = Jadwal::find($id);
        $kelas = Kelas::all();
        $gurumapel = GuruMapel::all();
        $mapel = Mapel::all();
        $isEdit = TRUE;
        return view('masterdata.datajadwal.edit', compact('jadwal', 'kelas', 'gurumapel', 'mapel', 'isEdit', 'id'));
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
        $jadwal = Jadwal::find($id);
        $jadwal->update([
            'nama_pengajar' => $request->nama_guru_mapel,
            'nama_kelas' => $request->nama_kelas,
            'nama_mapel' => $request->mata_pelajaran,
            'hari' => $request->hari,
            'dari_jam' => $request->dari_jam,
            'sampai_jam' => $request->sampai_jam,
        ]);
        return redirect('/jadwal');
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
