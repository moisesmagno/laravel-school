<?php

//PANEL
$this->get('panel', 'Panel\PanelController@index');

//SITE
$this->get('/', 'Site\SiteController@index')->name('home');
$this->get('promocoes', 'Site\SiteController@promotions')->name('promotions');


Auth::routes();

