<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // cek role admin
    public function isAdmin() {
        if($this->role == 2) return true;

        return false;
    }
    public function perusahaan(){
        return $this->hasOne('App\Perusahaan');
      }

    public function perusahaanlayout(){
        return $this->hasMany('App\Perusahaan');
        $user=User::with('perusahaan')->first();
        dd($user);
      }

      public function inbox(){
        return $this->hasMany('App\Inbox');
      }

}
