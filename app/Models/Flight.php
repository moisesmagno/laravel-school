<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
    	'plane_id',
    	'aiport_origin_id',
    	'aiport_destination_id',
    	'date',
    	'time_duration',
    	'hour_output',
    	'arrival_time',
    	'old_price',
    	'price',
    	'total_plots',
    	'is_promotion',
    	'image',
    	'qty_stops',
    	'description'
    ];

    public function newFlight($request){

    	$data = $request->all();
    	$data['aiport_origin_id'] = $request->origem;
    	$data['aiport_destination_id'] = $request->destination;

    	return $this->create($data);

    }
}
