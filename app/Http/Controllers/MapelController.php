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
        return view('masterdata.datamapel.index', compact('mapel', 'kelas'));
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
        return view('masterdata.datamapel.form', compact('mapel', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
            'id_kelas' => $request->nama_kelas,
            'kkm' => $request ->kkm,
        ]);

        return redirect()->route('mapel.index');
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
        $kelas = Kelas::all();
        return view('masterdata.datamapel.edit',compact('id','mapel', 'kelas'));
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
                'id_kelas' => $request->nama_kelas,
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
