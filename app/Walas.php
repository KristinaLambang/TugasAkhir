<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    protected $table = 'tb_walas';
    protected $primaryKey = 'id_guru_walas';
    protected $guarded = ['created_at','updated_at'];
    
    public function kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas', 'id_kelas');
    }
}
