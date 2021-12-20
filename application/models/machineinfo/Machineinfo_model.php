<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machineinfo_model extends CI_Model
{

  function machineinfo(){
    // $this->db->where('UserTypeId', 3);
    $query = $this->db->get('db_setting');
    return $query->result();
  }

  function hasupdate(){
    $this->db->select('has_update');
    $query = $this->db->get('db_setting');
    return $query->result();
  }


}


 ?>
