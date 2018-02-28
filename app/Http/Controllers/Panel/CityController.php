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
    private $totalPage = 20;

    public function __construct(City $city, State $state){
        $this->city = $city;
        $this->state = $state;
    }

    public function index($initials){

        $state = $this->state->where('initials', $initials)->get()->first();

        if(!$state)
            return redirect()->back();

        $cities = $state->cities()->paginate($this->totalPage);

        $title = "Cidades do estado: {$state->name}";

        return view('panel.cities.index', compact('title', 'state', 'cities'));
    }
}
