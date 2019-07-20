<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalibrasi extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
      }

    public function permohonan_kalibrasi(){
        return $this->belongsTo('App\permohonan_kalibrasi','permohonan_kalibrasi_id');
      }
      public function hasil_kalibrasi(){
        return $this->hasOne('App\Hasil_kalibrasi');
      }
}
