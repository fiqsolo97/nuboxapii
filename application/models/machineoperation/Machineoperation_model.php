<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machineoperation_model extends CI_Model
{

  function update_machine($mode){
    // $this->db->where('UserTypeId', 3);

        $this->db->set('mode',$mode);
        $this->db->where('id', 1);
        $result=$this->db->update('db_setting');
        return $result;
  }


}


 ?>
