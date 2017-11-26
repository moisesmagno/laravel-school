<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //Mostra a view do site.
    public function index(){
        $title = 'Home Page';
        return view('site.home.index', compact('title'));
    }

    //Mostra a view de promoções.
    public function promotions(){
        $title = 'Promoções';
        return view('site.promotions.list', compact('title'));
    }
}
