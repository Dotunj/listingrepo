<?php

namespace App\Controllers;

use Core\BaseController;

use App\Models\Contact as ContactModel;

class AdminController extends BaseController
{
   public function index()
   {

       return $this->view->render('admin/login');
   }
}