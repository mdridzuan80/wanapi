<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negeri extends Model
{
    protected $table = 'negeri';
    protected $primaryKey = 'kod';
    protected $keyType = 'string';
    protected $fillable = ['kod', 'nama'];
}
