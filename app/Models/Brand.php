<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //Campos que podem ser gravados.
    protected $fillable = ['name'];
}
