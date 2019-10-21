<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    protected $guarded = ['id_nilai', 'nama_siswa', 'spiritual', 'predikat', 'sikap', 'created_at','updated_at'];
}
