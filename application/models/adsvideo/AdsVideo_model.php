<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdsVideo_model extends CI_Model
{

  function adsvideo(){
    // $this->db->where('UserTypeId', 3);
    $query = $this->db->get('db_ads_video');
    return $query->result();
  }


}


 ?>
