<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    // protected $table = 'inboxes';
    public function permohonan_pengujian(){
        return $this->belongsTo('App\permohonan_pengujian','permohonan_pengujian_id');
      }
}
