<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nokp', 'password', 'name', 'email', 'api_token', 'peranan_kod',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $primaryKey = 'nokp';
    protected $keyType = 'string';
    public $incrementing = false;

    public function pelajar()
    {
        return $this->hasOne(Pelajar::class, 'nokp');
    }    
}
