<?php

namespace App\Models;

use Core\BaseModel;


class Listing extends BaseModel
{
    public function insert($data)
    {
       return $this->db->insert('listings', $data);
    }

    public function getListing()
    {
       
    }
}