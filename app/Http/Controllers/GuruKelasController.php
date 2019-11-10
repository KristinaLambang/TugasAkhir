<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\GuruMapel;
use App\GuruKelas;
use App\Mapel;
use App\Jadwal;

class GuruKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataguru = GuruKelas::all();
        $guru = GuruMapel::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('masterdata.datagurukelas.index', compact('dataguru', 'guru', 'kelas', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = GuruMapel::all();
        // print_r($guru);
        // exit();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('masterdata.datagurukelas.form', compact('guru','kelas','mapel'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // echo 'gurukeals store';
        // exit();
        $dataguru = new GuruKelas();
        $dataguru->id_guru_mapel = $request->get('id_guru_mapel');
        $dataguru->id_kelas = $request->get('id_kelas');
        $dataguru->id_mapel = $request->get('id_mapel');
        // print_r($dataguru);
        // exit();
        $dataguru->save();
        return redirect('/gurukelas');
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
        $dataguru = GuruKelas::find($id);
        $guru = GuruMapel::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $jadwal = Jadwal::all();
        return view('masterdata.datagurukelas.edit', compact('dataguru', 'guru','kelas', 'mapel','id', 'jadwal'));
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
        $dataguru = GuruKelas::where('id_guru_kelas',$id)->first();
        $dataguru->update([
            'id_guru_mapel' => $request->id_guru_mapel,
            'id_kelas' => $request->id_kelas,
            'id_mapel' => $request->id_mapel,
        ]);
        return redirect('/gurukelas');
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
