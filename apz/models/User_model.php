<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function checkEmail($email){
    $where = array(
      'email' => $email
    );

    return $this->db->get_where('akun', $where);
  }

  public function getUser($email){
    $where = array(
      'email' => $email
    );

    $q = $this->db->get_where('akun', $where);
    return $q->row();
  }

  public function addUser($datas){
    $data = array(
      'email'    => $datas['email'],
      'password' => password_hash($datas['password'], PASSWORD_BCRYPT),
      'nama'     => $datas['nama']
    );

    $this->db->insert('akun', $data);
  }

}
