<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

    private function cekLogin(){
        if($this->session->userdata('login_admin'))
            redirect(site_url('product/add'));
    }
    
    private function cekNotLogin(){
        if(!$this->session->userdata('login_admin'))
            redirect(site_url('sudo'));
    }

    private function generateAlamat(){
        $alamat = "";
        $n = "1234567890qwertyuiopasdfghjklzxcvbnm";
        for($i=0;$i<12;$i++){
          $alamat .= $n[rand(0, strlen($n) - 1)];
        }
        return 'pct_'.$alamat;
    }
    
    public function view($page){
        if($page=='login'){
            $this->cekLogin();

            if($this->input->post('login')){
                
              $this->actionLogin();
            } else {
              $data['message'] = $this->session->flashdata('msg');
              $this->load->view('login/admin', $data);
            }
        } else if($page=='dashboard'){
            $this->load->view('dashboard/admin/main');
        }
    }
    
    private function actionLogin(){
        $cekUsername = $this->admin_model->checkUsername($this->input->post('username'));
        
        if($cekUsername->num_rows() > 0){
            
            $admin = $this->admin_model->getAdmin($this->input->post('username'));
            if(password_verify($this->input->post('password'), $admin->password)){
                $data_session = array(
                    'login_admin'     => true,
                    'id_akun_admin'   => $admin->id,
                    'username_admin'  => $admin->username,
                    'nama_admin'      => $admin->nama,
                    'priv'            => 'admin'
                );
                
                $this->session->set_userdata($data_session);
                $this->mainMenu();
            } else {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger">Password salah.</div>');
              redirect(site_url('sudo'));
            }
          } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Username salah</div>');
            redirect(site_url('sudo'));
        }
    }
    
    public function mainMenu(){
        $data['content'] = 'dashboard/admin/verify_user';
        $this->load->view('dashboard/admin/main', $data);
    }
    
    public function verifProject(){
        $data['content'] = 'dashboard/admin/verify_project';
        $this->load->view('dashboard/admin/main', $data);
    }
    
    public function addProduct(){
        if($this->input->post('upload')){

            $config['upload_path']   = APPPATH.'../uploads/products/';
            $config['file_name']     = $this->generateAlamat();
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']      = 600;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto')){
                $message = '<h4>'. $this->upload->display_errors() .'</h4>';
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('msg', $message);
            }
            else{
                $data = $this->upload->data();
                $this->admin_model->addProduk($data['file_name']);
                $message = 'Produk berhasil diupload.';
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('msg', $message);
            }

            redirect(site_url('product/add'));
        }
        else {
            $data['type'] = $this->session->flashdata('type');
            $data['message'] = $this->session->flashdata('msg');
            $data['content'] = 'dashboard/admin/add_product';
            $this->load->view('dashboard/admin/main', $data);
        }
    }
}
