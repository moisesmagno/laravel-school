<?php

//DASHBOAD GROUP OF ROUTS
$this->group(['prefix'=>'panel', 'namespace'=>'Panel'], function(){
    $this->any('brands/search', 'BrandController@search')->name('brands.search');
    $this->resource('planes', 'PlaneController');
    $this->any('planes/search', 'PlaneController@search')->name('planes.search');
    $this->get('/', 'PanelController@index')->name('homepanel');
    $this->resource('brands', 'BrandController');
});

//SITE
$this->get('/', 'Site\SiteController@index')->name('home');
$this->get('promocoes', 'Site\SiteController@promotions')->name('promotions');


Auth::routes();

