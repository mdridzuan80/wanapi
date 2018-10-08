<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';
    protected $primaryKey = 'kod';
    protected $keyType = 'string';
    protected $fillable = ['kod', 'nama',];

    public function institusi()
    {
        return $this->belongsToMany(Institusi::class);
    }
}
