<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajar';
    protected $primaryKey = 'no_matrik';
    protected $keyType = 'string';

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
