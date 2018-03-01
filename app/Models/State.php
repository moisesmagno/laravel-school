<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function search($keySearch){
        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->orWhere('initials', $keySearch)
                    ->get();
    }

    //Recupera todos as cidades do estado. 
    //(1 estado para várias cidades)
    public function cities(){
    	return $this->hasMany(City::Class);
    }

    public function searchCities($cityName, $totalPage = 10){
        return $this->cities()->where('name','LIKE',"%{$cityName}%")->paginate($totalPage);
    }
}
