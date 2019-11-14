<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiSikap;
use App\Siswa;

class NilaiSikapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaisikap = NilaiSikap::all();
        $siswa = Siswa::all();
        return view('masterdata.laporan.nilaisikap.index',compact('nilaisikap', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('masterdata.laporan.nilaisikap.form',compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NilaiSikap::create([
                'nis' => $request->nis,
                'nama_siswa' => $request->nama_siswa,
                'spiritual' => $request->spiritual,
                'sikap' => $request->sikap,
            ]);

        return redirect()->route('laporan.nilaisikap.index');
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
        $nilaisikap = NilaiSikap::find($id);
        return view('masterdata.laporan.nilaisikap.edit',compact('id','nilaisikap'));
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
        $nilaisikap = NilaiSikap::find($id);
        $nilaisikap->update([
                'nis' => $request->nis,
                'nama_siswa' => $request->nama_siswa,
                'spiritual' => $request->spiritual,
                'sikap' => $request->sikap,
            ]);

        return redirect()->route('nilaisikap.index');
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
