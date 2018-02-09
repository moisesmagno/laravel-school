<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    //Campos que podem ser cadastrados.
    protected $fillable = ['brand_id', 'qty_passengers', 'class'];

    public function classes($className = null)
    {
        $classes = [
            'economic' => 'Economica',
            'luxury' => 'Luxuosa'
        ];

        if(!$className)
            return $classes;

        return $classes[$className];
    }

    //Trás a marca relacionado ao avião
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
