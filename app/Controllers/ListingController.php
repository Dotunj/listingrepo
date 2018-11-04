<?php

namespace App\Controllers;

use Core\BaseController;    
use App\Models\{Listing, ListingCategory, Category, ListingImage};
Use App\Helpers\{Session, Url};


class ListingController extends BaseController
{
    public $listing;

    public $listingCategory;

    public $listingImage;

    public function __construct()
    {
        parent::__construct();

        $this->listing = new Listing();

        $this->listingCategory = new ListingCategory();

        $this->listingImage = new ListingImage();
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

       //add the listing images
        foreach(input()->file('images', '[]') as $image){
            if($image->getMime() === 'image/jpeg' || $image->getMime() === 'image/png'){
                $fileName = sprintf('%s.%s', uniqid(), $image->getExtension());
                $image->move(sprintf($fileName, PUBLICDIR.'/uploads/%s'));
                $data = [
                    'listing_id' => $listing,
                    'image_name'=>$fileName
                 ];
                 $this->listingImage->insert($data); //insert the images associated with the listing
            }
        }

        Session::set('success', 'Listing has been created');
        
        response()->redirect('/admin/listing/create');

    }

    public function index()
    {
        $listings = $this->listing->get_all_listings();

        return $this->view->render('/listing/index', compact('listings'));
    }

    public function edit($id)
    {
         $listing = $this->listing->get_listing($id);

         return $this->view->render('/listing/edit', compact('listing'));
    }

    public function update($id)
    {
        $data = [
            'name'=> input()->post('name'),
            'description'=>input()->post('description'),
            'website_url'=>input()->post('website_url'),
            'email'=>input()->post('email'),
            'phone'=>input()->post('phone'),
            'address'=>input()->post('address'),
        ];
        
        $where =  ['id' => $id];

        $listing = $this->listing->update_listing($data, $where);
        
        Session::set('success', 'Listing has been updated');
        
        response()->redirect('/admin/listing/edit/'.$id);

    }

    public function delete($id)
    {

        $listing = $this->listing->get_listing($id);
        
        $where = ['id'=>$listing->id];

        $this->listing->delete_listing($where);

        Session::set('success', 'Listing has been deleted');

        response()->redirect('/admin/listing/all');
    }
}