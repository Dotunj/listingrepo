<?php

use Pecee\SimpleRouter\SimpleRouter as Router;




Router::group(['namespace'=>'App\Controllers'], function(){
    Router::get('/', 'AdminController@index');
    Router::get('/admin', 'AdminController@index');
    Router::post('/admin/login', 'AdminController@login');
    Router::get('/admin/dashboard', 'AdminController@dashboard');
    Router::get('/logout', 'AdminController@logout');
    Router::get('/admin/category/create', 'CategoryController@create');
    Router::post('/admin/category/store', 'CategoryController@store');
    Router::get('/admin/listing/create', 'ListingController@create');
    Router::post('/admin/listing/store', 'ListingController@store');
});