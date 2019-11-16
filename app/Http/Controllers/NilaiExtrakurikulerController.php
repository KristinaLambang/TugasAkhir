<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\NilaiExtrakurikuler;
use Auth;
use Illuminate\Http\Request;

class NilaiExtrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login=Auth::user()->id;
        $nilaiextrakurikuler = NilaiExtrakurikuler::where('id_guru_walas', $login)->get();
        $siswa = Siswa::all();
        return view('masterdata.laporan.nilaiextrakurikuler.index', compact('siswa', 'nilaiextrakurikuler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $login=Auth::user()->id;
        $siswa = Siswa::all();
        return view('masterdata.laporan.nilaiextrakurikuler.form', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login=Auth::user()->id;
        NilaiExtrakurikuler::create([
                'id_siswa' => $request->id_siswa,
                'id_guru_walas' => $login,
                'nama_extrakurikuler' => $request->nama_extrakurikuler,
                'nilai_extrakurikuler' => $request->nilai_extrakurikuler,
            ]);

        return redirect()->route('nilaiextrakurikuler.index');
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
        $login=Auth::user()->id;   
        $nilaiextrakurikuler = NilaiExtrakurikuler::find($id);
        return view('masterdata.laporan.nilaiextrakurikuler.edit',compact('id','nilaiextrakurikuler', 'login'));
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
        $nilaiextrakurikuler = NilaiExtrakurikuler::find($id);
        $nilaiextrakurikuler->update([
                'nama_extrakurikuler' => $request->nama_extrakurikuler,
                'nilai_extrakurikuler' => $request->nilai_extrakurikuler,
            ]);

        return redirect()->route('nilaiextrakurikuler.index');
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
