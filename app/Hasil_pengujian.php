<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil_pengujian extends Model
{
    public function pengujian(){
        return $this->belongsTo('App\Pengujian');
      }
}
