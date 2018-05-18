<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

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

  public function addProduk($alamat_foto){
    $slug = explode(" ", $this->input->post('nama_produk'));
    // hanya sampai 10 index
    $slug = strtolower(implode("-", array_slice($slug, 0, 10)));

    $data = array(
      'nama' => $this->input->post('nama_produk'),
      'harga' => (float)$this->input->post('harga'),
      'stok' => (int)$this->input->post('stok'),
      'desk' => $this->input->post('desk'),
      'tgl_upload' => date('Y-m-d H:i:s'),
      'slug' => $slug,
      'foto_utama' => $alamat_foto
    );

    $this->db->insert('produk', $data);
  }

  public function updateUser(){
    $this->db->where('email', $this->session->userdata('email'));

    $data = array(
      'nama' => $this->input->post('nama')
    );

    $this->db->update('akun', $data);
  }
}
