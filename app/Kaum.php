<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaum extends Model
{
    protected $table = 'kaum';
    protected $primaryKey = 'kod';
    protected $keyType = 'string';
    protected $fillable = ['kod', 'nama'];
}
