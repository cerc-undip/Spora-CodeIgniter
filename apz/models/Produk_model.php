<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
    public function getProdukById($id){
        $where = array(
            'id' => $id
        );
        
        $q = $this->db->get_where('produk', $where);
        return $q;
    }
    
    public function getProduk(){
        return $this->db->get('produk');
    }
    
}
