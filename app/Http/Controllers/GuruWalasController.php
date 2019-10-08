<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walas;

class GuruWalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guruwalas = Walas::all();
        return view('masterdata.dataguruwalas.index', compact('guruwalas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterdata.dataguruwalas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Walas::create([
                'nama_guru_walas' => $request->nama_guru_walas,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'wali_kelas' => $request->wali_kelas,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
            ]);

        return redirect()->route('guruwalas.index');
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
        $guruwalas = Walas::find($id);
        return view('masterdata.dataguruwalas.edit',compact('id','guruwalas'));
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
        $guruwalas = Walas::find($id);
        $guruwalas->update([
                'nama_guru_walas' => $request->nama_guru_walas,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'wali_kelas' => $request->wali_kelas,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
            ]);

        return redirect()->route('guruwalas.index');
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
