<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
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
    
    private function cekLogin(){
        if($this->session->userdata('login'))
            redirect(site_url());
    }
    
    private function cekNotLogin(){
        if(!$this->session->userdata('login'))
            redirect(site_url('sudo'));
    }
    
    private function actionLogin(){
        
        $cekUsername = $this->admin_model->checkUsername($this->input->post('username'));
        
        if($cekUsername->num_rows() > 0){
            
            $admin = $this->admin_model->getAdmin($this->input->post('username'));
            if(password_verify($this->input->post('password'), $admin->password)){
                $data_session = array(
                    'login'  => true,
                    'id_akun'=> $admin->id,
                    'username'  => $admin->username,
                    'nama'   => $admin->nama,
                    'priv'   => 'admin'
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
        $data['message'] = $this->session->flashdata('msg');
        $data['content'] = 'dashboard/admin/add_product';
        $this->load->view('dashboard/admin/main', $data);
    }
}
