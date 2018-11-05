<?php

namespace App\Models;

use Core\BaseModel;


class Listing extends BaseModel
{
    public function insert($data)
    {
       return $this->db->insert('listings', $data);
    }

    public function get_all_listings()
    {
       return $this->db->select('* from listings');
    }

    public function get_listing($id)
    {
        $data = $this->db->select('* from listings where id = :id', [':id' => $id]);
        return (isset($data[0]) ? $data[0] : null);
    }

    public function update_listing($data, $where)
    {
        return $this->db->update('listings', $data, $where);
    }

    public function delete_listing($where)
    {
        return $this->db->delete('listings', $where);
    }

    public function get_listing_category($id)
    {
        return $this->db->select('c.title FROM listingcategory cp INNER JOIN categories c ON cp.category_id=c.id WHERE cp.listing_id = :id', [':id'=>$id]);
    }

    public function get_listing_images($id)
    {
        return $this->db->select('image_name FROM images WHERE listing_id = :id', [':id'=>$id]);
    }
}