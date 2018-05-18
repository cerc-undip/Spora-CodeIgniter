<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('produk_model');
    }

    public function view($parameter){
        if($parameter=='user'){
            $this->load->view('login/'.$parameter);
        } else if ($parameter=='sudo'){
            $this->load->view('login/'.$parameter);
        }
    }

    public function actionLogin(){
        $email = $this->$input->post('etEmail');
        $password = $this->$input->post('etPassword');
    }

    public function detailProduct($id)
    {
        $data['produk'] = $this->produk_model->getProdukById($id)->result();
        $data['content'] = 'toko/detailProduct';
        $this->load->view('dashboard/user/main', $data);
    }

}
