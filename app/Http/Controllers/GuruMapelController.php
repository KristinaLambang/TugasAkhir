<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruMapel;
use App\Mapel;
use App\User;

class GuruMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurumapel = GuruMapel::all();
        $mapel = Mapel::all();
        return view('masterdata.datagurumapel.index', compact('gurumapel', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurumapel = GuruMapel::all();
        $mapel = Mapel::all();
        return view('masterdata.datagurumapel.form', compact('gurumapel', 'mapel'));
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
                'name'=>$request->nama_guru_mapel,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'level_user'=> 'guru'
            ]);
        GuruMapel::create([
                'id_guru_mapel'=>$user->id,
                'nama_guru_mapel' => $request->nama_guru_mapel,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'id_mapel' => $request->nama_mapel,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => $request->password,
            ]);

        return redirect()->route('gurumapel.index');
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
        $gurumapel = GuruMapel::where('id_guru_mapel', $id)->first();
        $mapel = Mapel::all();
        return view('masterdata.datagurumapel.edit',compact('id', 'gurumapel', 'mapel'));
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
        $gurumapel = GuruMapel::where('id_guru_mapel', $id);
        $gurumapel->update([
            'nama_guru_mapel' => $request->nama_guru_mapel,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'id_mapel' => $request->nama_mapel,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user = User::find($id);
        $user->update([
            'name'=>$request->nama_guru_mapel,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level_user'=> 'guru'
        ]);

        return redirect()->route('gurumapel.index');
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
