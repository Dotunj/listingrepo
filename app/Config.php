<?php

namespace App;

class Config {

    public static function get()
    {
      return [
        //default controller
        'default_controller' => 'Home',
        
        //default method
        'default_method' => 'index',

       //database credentials
       'db_type'=>'mysql',
       'db_host'=>'localhost',
       'db_name'=> 'inits',
       'db_username'=> 'root',
       'db_password'=> 'root',
        
      ];
    }
}