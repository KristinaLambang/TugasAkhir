<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    protected $table = 'tb_nilai_sikap';
    protected $primaryKey = 'id_nilai_sikap';
    protected $guarded = ['created_at','updated_at'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa','id_siswa','id_siswa');
    }

    public function walas()
    {
        return $this->belongsTo('App\Walas','id_guru_walas','id_guru_walas');
    }

    
}
