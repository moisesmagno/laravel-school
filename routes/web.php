<?php

//DASHBOAD GROUP OF ROUTS
$this->group(['prefix'=>'panel', 'namespace'=>'Panel'], function(){
    $this->get('/', 'PanelController@index');
    $this->resource('brands', 'BrandController');
});

//SITE
$this->get('/', 'Site\SiteController@index')->name('home');
$this->get('promocoes', 'Site\SiteController@promotions')->name('promotions');


Auth::routes();

