<?php

namespace App\Controllers;

use Core\BaseController;
use App\Models\Listing;

class HomeController extends BaseController
{
    public function index()
    {
        $listing = new Listing();

        $listings = $listing->get_all_listings();

        return $this->view->render('website/index', compact('listings'));
    }
}