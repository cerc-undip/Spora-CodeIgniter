<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function checkEmail($email){
    $where = array(
      'email' => $email
    );

    return $this->db->get_where('akun', $where);
  }

  public function checkVolunteer(){
    return $this->db->get_where('volunteer', ['id_akun' => $this->session->userdata('id_akun')]);
  }

  public function checkVolunteerByKTP($ktp){
    return $this->db->get_where('volunteer', ['no_ktp' => $ktp]);
  }

  public function getUser($email){
    $where = array(
      'email' => $email
    );

    $q = $this->db->get_where('akun', $where);
    return $q->row();
  }

  public function getVolunteerConfirm(){
    $q = $this->db->get_where('volunteer', ['id_akun' => $this->session->userdata('id_akun')]);
    return $q->row()->confirmed;
  }

  public function addUser($datas){
    $data = array(
      'email'    => $datas['email'],
      'password' => password_hash($datas['password'], PASSWORD_BCRYPT),
      'nama'     => $datas['nama']
    );

    $this->db->insert('akun', $data);
  }

  public function addVolunteer(){
    $data = array(
      'id_akun' => $this->session->userdata('id_akun'),
      'status'  => $this->input->post('status'),
      'prov'    => $this->input->post('prov'),
      'kab'     => $this->input->post('kab'),
      'kec'     => $this->input->post('kec'),
      'jalan'   => $this->input->post('jalan'),
      'no_ktp'  => $this->input->post('no_ktp')
    );

    $this->db->insert('volunteer', $data);
  }

  public function updateUser(){
    $this->db->where('email', $this->session->userdata('email'));

    $data = array(
      'nama' => $this->input->post('nama')
    );

    $this->db->update('akun', $data);
  }
}
