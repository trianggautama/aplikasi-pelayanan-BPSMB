<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan_pengujian extends Model
{
    public function pengujian(){
        return $this->belongsTo('App\pengujian','pengujian_id');
    }
}
