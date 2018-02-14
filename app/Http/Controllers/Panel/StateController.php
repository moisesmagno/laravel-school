<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;

class StateController extends Controller
{
    private $state;

    public function __construct(State $state){
        $this->state = $state;
    }

    public function index(){
        $states = $this->state->get();
        $title = "Lista dos estados Brasileiros";
        return view('panel.states.index', compact('states','title'));
    }
}
