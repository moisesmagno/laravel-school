<?php

$this->get('panel', 'Panel\PanelController@index');

Route::get('/', function () {
    return view('welcome');
});
