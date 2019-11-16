<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leger extends Model
{
    protected $table = 'tb_laporan_leger';
    protected $primaryKey = 'id_laporan_leger';
    protected $guarded = ['id_laporan_leger','created_at','updated_at'];
}
