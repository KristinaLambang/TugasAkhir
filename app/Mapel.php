<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'tb_mapel';
    protected $primaryKey = 'id_mapel';
    protected $guarded = ['id_mapel','created_at','updated_at'];
}
