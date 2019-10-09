<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $guarded = ['id_jadwal','created_at','updated_at'];
}
