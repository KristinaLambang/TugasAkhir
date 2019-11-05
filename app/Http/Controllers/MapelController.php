<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\Kelas;
use App\GuruMapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $gurumapel = GuruMapel::all();
        return view('masterdata.datamapel.index', compact('mapel', 'kelas', 'gurumapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $gurumapel = GuruMapel::all();
        $isEdit = FALSE;
        return view('masterdata.datamapel.form', compact('mapel', 'kelas', 'gurumapel', 'isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gurumapel = GuruMapel::all();
        $kelas = Kelas::all();
        $isEdit = FALSE;
        return view('masterdata.datamapel.form', compact('gurumapel','kelas','isEdit'));
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
        $mapel = Mapel::find($id);
        return view('masterdata.datamapel.edit',compact('id','mapel'));
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
        $mapel = Mapel::find($id);
        $mapel->update([
                'nama_mapel' => $request->nama_mapel,
                'nama_kelas' => $request->nama_kelas,
                'nama_pengajar' => $request->nama_pengajar,
                'kkm' => $request->kkm,
            ]);

        return redirect()->route('mapel.index');
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
