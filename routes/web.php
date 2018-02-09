<?php

//DASHBOAD GROUP OF ROUTS
$this->group(['prefix'=>'panel', 'namespace'=>'Panel'], function(){

    //Panel
    $this->get('/', 'PanelController@index')->name('homepanel');

    //Planes
    $this->resource('planes', 'PlaneController');

    //Brands
    $this->resource('brands', 'BrandController');
    $this->any('brands/search', 'BrandController@search')->name('brands.search');
    $this->get('brands/{id}/planes', 'BrandController@planes')->name('brands.planes');
});

//SITE
$this->get('/', 'Site\SiteController@index')->name('home');
$this->get('promocoes', 'Site\SiteController@promotions')->name('promotions');


Auth::routes();

