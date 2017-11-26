<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    //Mostra a view
    Public function index(){
        return view('panel.home.index');
    }
}
