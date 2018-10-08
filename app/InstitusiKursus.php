<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitusiKursus extends Model
{
    protected $table = 'institusi_kursus';

    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'kursus_kod');
    }

    public function institusi()
    {
        return $this->belongsTo(Institusi::class, 'institusi_kod');
    }
}
