<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaans';

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function permohonan_kalibrasi(){
      return $this->hasMany('App\Permohonan_kalibrasi');
    }

    public function permohonan_pengujian(){
      return $this->hasMany('App\Permohonan_pengujian');
    }

}
