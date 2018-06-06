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

    public function getItens(){
    	return $this->with(['origin','destination'])->paginate($this->totalPaginate);
    }

    public function newFlight($request, $fileName){

    	$data = $request->all();
    	$data['image'] = $fileName;
    	$data['aiport_origin_id'] = $request->origem;
    	$data['aiport_destination_id'] = $request->destination;

    	return $this->create($data);

    }

    public function origin(){
    	return $this->belongsTo(Aiport::Class, 'aiport_origin_id');
    }

    public function destination(){
    	return $this->belongsTo(Aiport::Class, 'aiport_destination_id');
    }



}
