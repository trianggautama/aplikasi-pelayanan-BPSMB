<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan_pengujian extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
      }

    public function perusahaan(){
        return $this->belongsTo('App\Perusahaan','perusahaan_id');
      }

    public function retribusi(){
        return $this->belongsTo('App\Retribusi_pengujian','retribusi_pengujian_id');
      }

    public function inbox(){
        return $this->belongsToMany('App\Inbox');
      }
}
