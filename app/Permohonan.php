<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan';

    public function kursus()
    {
        return $this->belongsToMany(Kursus::class);
    }

    public function detail_permohonan()
    {
        return $this->hasMany(DetailPermohonan::class);
    }
}
