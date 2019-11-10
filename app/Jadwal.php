<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $guarded = ['created_at','updated_at'];

    public function gurumapel()
        {
            return $this->belongsTo('App\GuruMapel', 'nama_pengajar', 'id_guru_mapel');
        }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'nama_kelas', 'id_kelas');
    }
    
    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'nama_mapel', 'id_mapel');
    }
}
