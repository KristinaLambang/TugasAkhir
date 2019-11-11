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
      return $this->belongsTo('App\GuruMapel','id_guru_mapel', 'id_guru_mapel');
    }
  
    public function siswa()
    {
        return $this->belongsTo('App\Siswa','id_siswa','id_siswa');
    }

    public function kelas()
    {
      return $this->belongsTo('App\Kelas','id_kelas');
    }

    public function mapel()
    {
      return $this->belongsTo('App\Mapel','id_mapel', 'id_mapel');
    }
}
