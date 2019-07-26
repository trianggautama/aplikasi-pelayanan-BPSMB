<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
      }

    public function permohonan_pengujian(){
        return $this->belongsTo('App\permohonan_pengujian','permohonan_pengujian_id');
      }

    public function hasil_pengujian(){
        return $this->HasOne('App\Hasil_pengujian');
      }
}
