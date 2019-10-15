<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\GuruMapel;
use App\GuruKelas;

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
        // print_r($dataguru);
        // exit();
        return view('masterdata.datagurukelas.index', compact('dataguru'));
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
        $isEdit = FALSE;
        return view('masterdata.datagurukelas.form', compact('guru','kelas','isEdit'));    
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
        $dataguru->id_guru_mapel = $request->get('id_guru');
        $dataguru->id_kelas = $request->get('id_kelas');
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
        //
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
        //
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
