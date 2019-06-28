<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan_kalibrasi extends Model
{
    public function perusahaan(){
        return $this->belongsTo('App\Perusahaan','perusahaan_id');
      }

    public function retribusi(){
        return $this->belongsTo('App\Retribusi_kalibrasi','retribusi_kalibrasi_id');
      }
}
