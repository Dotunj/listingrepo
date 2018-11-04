<?php

namespace App\Controllers;

use Core\BaseController;
use App\Models\Admin;
use App\Helpers\{Session, Url};


class AdminController extends BaseController
{
   protected $admin;

   public function __construct()
   {
       parent::__construct();


       $this->admin = new Admin();
   }

   public function index()
   {
       return $this->view->render('admin/login');
   }

   public function login()
   {

       $errors = [];
       
        $email = input()->post('email');
        $password = input()->post('password');

        if (password_verify($password, $this->admin->get_hash($email)) == false) {
            $errors[] = 'Wrong username or password';
        }

        if (count($errors) == 0) {

            //logged in
            $data = $this->admin->get_admin($email);

            Session::set('logged_in', true);
            Session::set('admin_id', $data->id);

            redirect('/admin/dashboard');
        }

       return $this->view->render('admin/login', compact('errors'));

   }

   public function dashboard()
   {
    if (! Session::get('logged_in')) {
        response()->redirect('/admin');
    }

    var_dump(Session::display());
    return $this->view->render('admin/dashboard');
   }
   
   public function logout()
   {
       Session::destroy();

       return response()->redirect('/');
   }

}