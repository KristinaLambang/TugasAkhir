<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    protected $guarded = ['id_nilai', 'created_at','updated_at'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa','id_siswa','id_siswa');
    }
}
