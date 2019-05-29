<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan_kalibrasi extends Model
{
    public function perusahaan(){
        return $this->belongsTo('App\Perusahaan','id_perusahaan');
      }

    public function retribusi(){
        return $this->belongsTo('App\Retribusi_kalibrasi','id_retribusi_kalibrasi');
      }  
}
