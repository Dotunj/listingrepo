<?php

namespace App\Models;

use Core\BaseModel;

class ListingCategory extends BaseModel
{
    public function insert($data)
    {
        return $this->db->insert('listingcategory', $data);
    }
}