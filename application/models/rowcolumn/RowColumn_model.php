<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RowColumn_model extends CI_Model
{

  function rowcolumn(){
    // $this->db->where('UserTypeId', 3);
    $query = $this->db->get('db_row_and_column');
    return $query->result();
  }


}


 ?>
