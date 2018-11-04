<?php

namespace App\Controllers;

use Core\BaseController;    
use App\Models\{Listing, ListingCategory, Category};


class ListingController extends BaseController
{
    public $listing;

    public $listingCategory;

    public function __construct()
    {
        parent::__construct();

        $this->listing = new Listing();

        $this->listingCategory = new ListingCategory();
    }
    public function create()
    {
        $category = new Category;

        $categories = $category->get_all_categories(); //fetch all categories

        return $this->view->render('/listing/create', compact('categories'));
    }

    public function store()
    {
       $errors = [];

       $data = [
           'name'=> input()->post('name'),
           'description'=>input()->post('description'),
           'website_url'=>input()->post('website_url'),
           'email'=>input()->post('email'),
           'phone'=>input()->post('phone'),
           'address'=>input()->post('address'),
       ];

       $listing = $this->listing->insert($data); //get the newly created listing'

       $listing_categories = input()->post('categories');

        foreach($listing_categories as $key =>$value){
            $data = [
                'listing_id'=>$listing,
                'category_id'=>$value,
            ];
          $this->listingCategory->insert($data);
        }

        $test = input()->file('images');
        var_dump($test);

       //add the listing images
        foreach(input()->file('images',) as $image){
            if($image->getMime() === 'image/jpeg'){
                $destinationFilename = sprintf('%s.%s', uniqid(), $image->getExtension());
                $image->move_uploaded_file(sprintf('/public/uploads/%s', $destinationFilename));
            }
        }
       var_dump('okay');

    }
}