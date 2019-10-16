<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    protected $guarded = ['id_nilai','created_at','updated_at'];

    public function guru()
  {
    return $this->belongsTo('App\GuruMapel','id_guru_mapel');
  }
  public function kelas()
  {
    return $this->belongsTo('App\Kelas','id_kelas');
  }
}
