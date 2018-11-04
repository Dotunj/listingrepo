<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use App\Helpers\Session;
use App\Middleware\Auth;

Session::init();

Router::group(['namespace'=>'App\Controllers'], function() {
    Router::get('/', 'AdminController@index');
    Router::get('/admin', 'AdminController@index');
    Router::post('/admin/login', 'AdminController@login');
});

Router::group(['namespace'=>'App\Controllers'], function(){
    Router::get('/admin/dashboard', 'AdminController@dashboard');
    Router::get('/logout', 'AdminController@logout');
    Router::get('/admin/category/create', 'CategoryController@create');
    Router::post('/admin/category/store', 'CategoryController@store');
    Router::get('/admin/listing/create', 'ListingController@create');
    Router::post('/admin/listing/store', 'ListingController@store');
    Router::get('/admin/listing/all', 'ListingController@index');
    Router::get('/admin/listing/edit/{id}', 'ListingController@edit');
    Router::post('/admin/listing/update/{id}', 'ListingController@update');
    Router::post('/admin/listing/delete/{id}', 'ListingController@delete');
});