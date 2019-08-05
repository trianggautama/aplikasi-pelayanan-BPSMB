<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan_kalibrasi extends Model
{
    public function kalibrasi(){
        return $this->belongsTo('App\kalibrasi','kalibrasi_id');
    }

}
