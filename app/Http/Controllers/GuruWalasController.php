<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walas;
use App\Kelas;
use App\GuruMapel;
use App\Mapel;
use App\User;

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
        $kelas = Kelas::all();
        return view('masterdata.dataguruwalas.index', compact('guruwalas', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guruwalas = Walas::all();
        $kelas = Kelas::all();
        return view('masterdata.dataguruwalas.form', compact('guruwalas', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name'=>$request->nama_guru_walas,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level_user'=> 'walas'
        ]);

        Walas::create([
                'id_guru_walas'=>$user->id,
                'nama_guru_walas' => $request->nama_guru_walas,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'id_kelas' => $request->id_kelas,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => $request->password,
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
        $guru = GuruMapel::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $guruwalas = Walas::find($id);
        return view('masterdata.dataguruwalas.edit', compact('guru','kelas', 'mapel','id', 'guruwalas'));
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
                'id_kelas' => $request->nama_kelas,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        
        $user = User::find($id);
        $user->update([
                'name'=>$request->nama_guru_walas,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'level_user'=> 'walas'
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
