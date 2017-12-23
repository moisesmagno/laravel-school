<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //Campos que podem ser gravados.
    protected $fillable = ['name'];

    //Search Brands
    public function search($keySearch, $totalPage = 10){
        return $this->where('name', 'LIKE', "%{$keySearch}%")->paginate($totalPage);
    }
}
