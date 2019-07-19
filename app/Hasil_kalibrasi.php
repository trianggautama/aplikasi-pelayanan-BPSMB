<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil_kalibrasi extends Model
{
    public function kalibrasi(){
        return $this->belongsToMany('App\kalibrasi');
      }    }
