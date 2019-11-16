<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Absensi;
use Auth;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login=Auth::user()->id;
        $absensi = Absensi::where('id_guru_walas', $login)->get();
        $siswa = Siswa::all();
        return view('masterdata.laporan.absensi.index', compact('siswa', 'absensi'));
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
        return view('masterdata.laporan.absensi.form', compact('siswa'));
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
        Absensi::create([
                'id_siswa' => $request->id_siswa,
                'id_guru_walas' => $login,
                'alpa' => $request->alpa,
                'ijin' => $request->ijin,
                'sakit' => $request->sakit,
            ]);

        return redirect()->route('absensi.index');
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
        $absensi = Absensi::find($id);
        return view('masterdata.laporan.absensi.edit',compact('id','absensi', 'login'));
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
        $absensi = Absensi::find($id);
        $absensi->update([
            'alpa' => $request->alpa,
            'ijin' => $request->ijin,
            'sakit' => $request->sakit,
        ]);

        return redirect()->route('absensi.index');
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
