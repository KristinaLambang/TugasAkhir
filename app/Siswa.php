<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = ['id_siswa','created_at','updated_at'];
}
