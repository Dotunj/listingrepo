<?php

namespace App\Models;

use Core\BaseModel;

class Admin extends BaseModel
{
   public function get_hash($email)
  {
    $data = $this->db->select('password FROM admins WHERE email = :email', [':email' => $email]);
   return (isset($data[0]->password) ? $data[0]->password : null);
  }

    public function get_admin($email)
  {
    $data = $this->db->select('* FROM admins WHERE email = :email', [':email' => $email]);
    return (isset($data[0]) ? $data[0] : null);
  }
}