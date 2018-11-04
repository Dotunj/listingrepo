<?php

namespace App\Models;

use Core\BaseModel;

class ListingImage extends BaseModel
{
    public function insert($data)
    { 
        $this->db->insert('images', $data);

    }
}