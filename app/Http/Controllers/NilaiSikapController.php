<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiSikap;
use App\Siswa;
use Auth;

class NilaiSikapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login=Auth::user()->id;
        $nilaisikap = NilaiSikap::where('id_guru_walas', $login)->get();
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
        $login=Auth::user()->id;
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
        $login=Auth::user()->id;
        NilaiSikap::create([
                'id_siswa' => $request->id_siswa,
                'id_guru_walas' => $login,
                'nilai_spiritual' => $request->nilai_spiritual,
                'nilai_sikap' => $request->nilai_sikap,
            ]);

        return redirect()->route('nilaisikap.index');
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
        $nilaisikap = NilaiSikap::find($id);
        // dd($nilaisikap);
        return view('masterdata.laporan.nilaisikap.edit',compact('id','nilaisikap', 'login'));
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
                'nilai_spiritual' => $request->nilai_spiritual,
                'nilai_sikap' => $request->nilai_sikap,
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
