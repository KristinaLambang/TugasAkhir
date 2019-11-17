<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\User;
use Symfony\Component\HttpKernel\Profiler\Profile;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('masterdata.datasiswa.index', compact('siswa', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $kelas=Kelas::all();
        return view('masterdata.datasiswa.form',compact('siswa', 'kelas'));
    }

    public function profile($id)
    {
        $siswa = Siswa::all();
        return view('masterdata.datasiswa.profile',compact('id', 'siswa'));
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
            'name'=> $request->nama_siswa,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level_user'=> 'siswa'
        ]);

        Siswa::create([
            'id_siswa' => $user->id,
            'nis' => $request->nis,
            'nama_kelas' => $request->nama_kelas,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan' => $request->pekerjaan,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('siswa.index');
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
        $siswa = Siswa::where('id_siswa', $id)->first();
        $kelas=Kelas::all();
        return view('masterdata.datasiswa.edit',compact('siswa', 'kelas', 'id'));
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
        $siswa = Siswa::where('id_siswa', $id);
        $siswa->update([
            'nis' => $request->nis,
            'nama_kelas' => $request->nama_kelas,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan' => $request->pekerjaan,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user = User::find($id);
        $user->update([
            'name'=> $request->nama_siswa,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level_user'=> 'siswa'
        ]);

        return redirect()->route('siswa.index');
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
