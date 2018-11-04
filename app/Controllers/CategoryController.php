<?php

namespace App\Controllers;

use Core\BaseController;
use App\Models\Category;
use App\Helpers\{Session, Url};


class CategoryController extends BaseController 
{
    protected $category;

    public function __construct()
    {
        parent::__construct();

        $this->category = new Category();
    }
     public function create()
     {
    
         Session::display();
         return $this->view->render('/category/create');
     }

     public function store()
     {
        $errors = [];

        $title = input()->post('title');

        if ($title == $this->category->category_exists($title)){
            $errors[] = 'Category already exists';
        }

        if (count($errors) == 0) {

            $data = [
                'title' => $title,
            ];

            $this->category->insert($data);

            Session::set('success', 'Category Created');

            Url::redirect('/admin/category/create');
        }

        return $this->view->render('/category/create', compact('errors'));
     }
}