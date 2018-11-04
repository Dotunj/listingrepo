<?php

namespace App\Models;

use Core\BaseModel;

class Category extends BaseModel
{
    public function insert($data)
    {
        $this->db->insert('categories', $data);
    }

    public function category_exists($title)
    {
        $data = $this->db->select('title from categories where title = :title', [':title' => $title]);

        return (isset($data[0]->title) ? $data[0]->title : null);
    }
}
