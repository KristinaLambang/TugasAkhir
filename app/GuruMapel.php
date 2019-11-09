<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    protected $table = 'tb_guru_mapel';
    protected $guarded = ['created_at','updated_at'];

  public function mapel()
  {
    return $this->belongsTo('App\Mapel','id_mapel', 'id_mapel');
  }
}
