<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPermohonan extends Model
{
    protected $table = 'detail_permohonan';

    public function institusi_kursus()
    {
        return $this->belongsTo(InstitusiKursus::class, 'institusi_kursus_id');
    }

    public function scopeTerpilih($query)
    {
        return $query->where('status_pilihan',1);
    }
}
