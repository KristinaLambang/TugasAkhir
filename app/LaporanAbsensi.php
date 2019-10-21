<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanAbsensi extends Model
{
    protected $table = 'tb_laporan_absensi';
    protected $primaryKey = 'id_laporan_absensi';
    protected $guarded = ['id_laporan_absensi','created_at','updated_at'];
}
