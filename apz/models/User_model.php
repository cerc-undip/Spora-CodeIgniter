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

  public function getVolunteer(){
    $q = $this->db->get_where('volunteer', ['id_akun' => $this->session->userdata('id_akun')]);
    return $q->row();
  }

  public function getVolunteerConfirm(){
    $q = $this->db->get_where('volunteer', ['id_akun' => $this->session->userdata('id_akun')]);
    return $q->row()->confirmed;
  }

  public function getAlamat(){
    $q = $this->db->get_where('user', ['id_akun' => $this->session->userdata('id_akun')]);
    return $q->row();
  }

  public function addAkun($datas){
    $data = array(
      'email'    => $datas['email'],
      'password' => password_hash($datas['password'], PASSWORD_BCRYPT),
      'nama'     => $datas['nama']
    );

    $this->db->insert('akun', $data);
  }

  public function addUser($datas, $id_akun){
    $data = array(
      'id_akun' => $id_akun,
    );

    $this->db->insert('user', $data);
  }

  public function addVolunteer(){
    $data = array(
      'id_akun' => $this->session->userdata('id_akun'),
      'status'  => $this->input->post('status'),
      'no_ktp'  => $this->input->post('no_ktp'),
      'telp' => $this->input->post('telp')
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

  public function updateVolunteer(){
    $this->db->where('id_akun', $this->session->userdata('id_akun'));

    $data = array(
      'telp' => $this->input->post('telp')
    );

    $this->db->update('volunteer', $data);
  }

  public function updateUserPass(){
    $this->db->where('email', $this->session->userdata('email'));

    $data = array(
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
    );

    $this->db->update('akun', $data);
  }

  public function updateAlamat(){
    $this->db->where('id_akun', $this->session->userdata('id_akun'));

    $data = array(
      'prov' => $this->input->post('prov'),
      'kab'  => $this->input->post('kab'),
      'kec'  => $this->input->post('kec'),
      'jalan'=> $this->input->post('jalan')
    );

    $this->db->update('user', $data);
  }
}
