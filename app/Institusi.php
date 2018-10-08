<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    protected $table = 'institusi';
    protected $primaryKey = 'kod';
    protected $keyType = 'string';
    protected $fillable = ['kod', 'nama', 'alamat'];

    public function kursus()
    {
        return $this->belongsToMany(Kursus::class);
    }
}
