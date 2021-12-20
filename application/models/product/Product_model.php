<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{

  function product(){
    // $this->db->where('UserTypeId', 3);
    $query = $this->db->get('db_product');
    return $query->result();
  }


}


 ?>
