<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','telepon','role','username','nik'
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


    public function pengaduan(){
        return $this->hasMany('App\Pengaduan');
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */

    public function getIdIdentifier(){
      return $this->nik;
    }


    public function setIdidentifier($value){
      $this->attributes['nik'] = $value;
    }
}
