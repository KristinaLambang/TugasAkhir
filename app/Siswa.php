<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $guarded = ['created_at', 'updated_at'];

    public function data()
    {
        return $this->belongsTo('App\User');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas','nama_kelas','id_kelas');
    }

    public function sikap()
    {
        return $this->belongsTo('App\NilaiSikap','id_siswa','id_siswa');
    }

    public function absensi()
    {
        return $this->belongsTo('App\Absensi','id_siswa','id_siswa');
    }
}
