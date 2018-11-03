<?php

namespace App\Controllers;

use Core\BaseController;

use App\Models\Contact as ContactModel;

class AdminController extends BaseController
{
   public function index()
   {
       $contact = new ContactModel();

       $records = $contact->getContacts();

       return $this->view->render('contacts/index', compact('records'));
   }
}