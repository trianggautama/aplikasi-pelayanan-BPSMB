<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaans';

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
