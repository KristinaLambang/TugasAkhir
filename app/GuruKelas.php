<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruKelas extends Model
{
    protected $table = 'tb_guru_kelas';
    protected $primaryKey = 'id_guru_kelas';
    protected $guarded = ['id_guru_kelas','id_kelas','id_guru_mapel','created_at','updated_at'];

    public function guru()
  {
    return $this->belongsTo('App\GuruMapel','id_guru_mapel');
  }
  public function kelas()
  {
    return $this->belongsTo('App\Kelas','id_kelas');
  }

}
