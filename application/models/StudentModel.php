<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model
{

  public function get_student()
  {
    $query = $this->db->get("students");
    return $query->result();
  }

  public function insert_function($data)
  {
    return  $this->db->insert('students',$data);
  }

  public function edit_student($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('students');
    return $query->row();
  }

  public function update_student($data, $id)
  {
    $this->db->where('id', $id);
    return $this->db->update('students', $data);
  }

  public function delete_student($id)
  {
    return $this->db->delete('students', ['id' => $id]);
  }
}


 ?>
