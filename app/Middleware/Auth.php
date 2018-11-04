<?php

namespace App\Middleware;

use App\Helpers\Session;

class Auth
{
    public static function notLoggedin()
    {
      if(!(Session::get('logged_in'))){
         response()->redirect('/admin');
      }

    }
}