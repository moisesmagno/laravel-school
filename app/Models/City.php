<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    //Recupera o estado da cidades
    //(1 Cidades para 1 Estado)
    public function state(){
    	return $this->belongsTo(State::Class);
    }
}
