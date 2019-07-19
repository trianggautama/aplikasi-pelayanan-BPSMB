<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    public function permohonan_pengujian(){
        return $this->belongsTo('App\permohonan_pengujian','permohonan_pengujian_id');
      }
}
