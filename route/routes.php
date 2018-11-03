<?php

use Pecee\SimpleRouter\SimpleRouter as Router;


Router::group(['namespace'=>'App\Controllers'], function(){
    Router::get('/contact', 'AdminController@index');
});