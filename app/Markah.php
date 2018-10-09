<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markah extends Model
{
    protected $table = "markah";
    protected $fillable = ['nokp', 'kursus_kod', 'subjek_kod', 'jumlah'];

    


}
