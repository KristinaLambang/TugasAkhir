<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    protected $table = 'tb_guru_mapel';
    protected $primaryKey = 'id_guru_mapel';
    protected $guarded = ['id_guru_kelas','id_kelas','id_guru_mapel','created_at','updated_at'];

    public function guru()
  {
    return $this->belongsTo('App\GuruMapel','id_guru_mapel');
  }
  public function kelas()
  {
    return $this->belongsTo('App\Mapel','id_mapel');
  }
}
