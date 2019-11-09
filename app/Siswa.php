<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $guarded = [];


    public function data()
    {
        return $this->belongsTo('App\User');
    }
}
