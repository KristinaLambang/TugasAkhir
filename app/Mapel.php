<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'tb_mapel';
    protected $primaryKey = 'id_mapel';
    protected $guarded = ['id_mapel','created_at','updated_at'];

    public function mapel()
  {
    return $this->belongsTo('App\Mapel','id_mapel');
  }
  public function kelas()
  {
    return $this->belongsTo('App\Kelas','nama_kelas');
  }
  public function gurukelas()
  {
    return $this->belongsTo('App\GuruKelas','nama_pengajar');
  }

}
