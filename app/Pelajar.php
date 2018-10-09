<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajar';
    protected $primaryKey = 'nokp';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $dates = [
        'tkh_lahir',
    ];

    protected $fillable = [
        'no_matrik',
        'nokp', 
        'nama',
        'jantina_kod',
        'tkh_lahir',
        'sesi_kemasukan',
        'alamat',
        'poskod',
        'bandar',
        'negeri_kod'
    ];

    // relationship
    public function user()
    {
        return $this->hasOne(User::class, 'nokp');
    }

    public function markah()
    {
        return $this->hasMany(Markah::class, 'nokp');
    }
    //
}
