<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jantina extends Model
{
    protected $table = 'jantina';
    protected $primaryKey = 'kod';
    protected $keyType = 'string';
    protected $fillable = ['kod', 'nama'];
}
