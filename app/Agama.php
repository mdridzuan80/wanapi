<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = 'agama';
    protected $primaryKey = 'kod';
    protected $keyType =  'string';
    protected $fillable = ['kod', 'nama'];
}
