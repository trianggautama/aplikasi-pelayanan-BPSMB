<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalibrasi extends Model
{
    public function permohonan_kalibrasi(){
        return $this->belongsTo('App\permohonan_kalibrasi','permohonan_kalibrasi_id');
      }
}
