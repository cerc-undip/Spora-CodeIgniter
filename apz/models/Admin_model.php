<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function checkUsername($username){
    $where = array(
      'username' => $username
    );

    return $this->db->get_where('admin', $where);
  }

  public function getAdmin($username){
    $where = array(
      'username' => $username
    );

    $q = $this->db->get_where('admin', $where);
    return $q->row();
  }

  public function updateUser(){
    $this->db->where('email', $this->session->userdata('email'));

    $data = array(
      'nama' => $this->input->post('nama')
    );

    $this->db->update('akun', $data);
  }
}
