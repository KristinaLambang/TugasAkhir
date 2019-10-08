<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    protected $table = 'tb_walas';
    protected $primaryKey = 'id_walas';
    protected $guarded = ['id_walas','created_at','updated_at'];
}
