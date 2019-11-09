<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'tb_mapel';
    protected $primaryKey = 'id_mapel';
    protected $guarded = ['created_at','updated_at'];

  public function kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas','id_kelas');
    }
  
  public function gurumapel()
  {
    return $this->belongsTo('App\GuruMapel', 'id_guru_mapel', 'id_guru_mapel');
  }

}
