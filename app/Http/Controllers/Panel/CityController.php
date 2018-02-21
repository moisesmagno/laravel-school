<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    protected $state;
    protected $city;

    public function __construct(City $city, State $state){
        $this->city = $city;
        $this->state = $state;
    }

    public function index($initials){
            
        $state = $this->state->where('initials', $initials)->get()->first();
        dd($state);
        if(!$state)
            return redirect()->back();

        //$title = "Cidades do estado: {$state->name}";

        //return view('panel.cities.index', compact('title'));
    }
}
