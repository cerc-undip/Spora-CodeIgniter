<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    private function cekLogin(){
        if($this->session->userdata('login'))
            redirect(site_url());
    }
    private function cekNotLogin(){
        if(!$this->session->userdata('login'))
            redirect(site_url('login'));
    }

    public function view($page){
        if($page == 'login'){
            $this->cekLogin();

            if($this->input->post('login')){
                $this->actionLogin();
            }
            else {
                $data['message'] = $this->session->flashdata('msg');
                $this->load->view('login/user', $data);
            }
        }
        else if($page == 'register'){
            $this->cekLogin();
            
            if($this->input->post('register')){
                $this->actionRegister();
            }
            else {
                $data['message'] = $this->session->flashdata('msg');
                $this->load->view('register/user', $data);
            }
        }
        else if($page == 'dashboard'){
            $this->cekNotLogin();
            $this->load->view('dashboard/user/main');
        }
        else if($page == 'upload_proyek'){
            $this->cekNotLogin();
            if($this->input->post('upload')){
                $this->actionUploadProyek();
            }
            else {
                $data['message'] = $this->session->flashdata('msg');
                $this->load->view('dashboard/user/upload_proyek');
            }
        }
    }
    
    private function actionLogin(){
        $cekEmail = $this->user_model->checkEmail($this->input->post('email'));

        if($cekEmail->num_rows() > 0){
            $user = $this->user_model->getUser($this->input->post('email'));

            if(password_verify($this->input->post('password'), $user->password)){
                $data_session = array(
                    'login'  => true,
                    'id_akun'=> $user->id,
                    'email'  => $user->email,
                    'nama'   => $user->nama,
                    'priv'   => $user->priv
                );
                $this->session->set_userdata($data_session);

                redirect(site_url());
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Password salah.</div>');
            }
        }
        else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Email belum terdaftar.</div>');
        }

        redirect(site_url('login'));
    }

    private function actionRegister(){
        $cekEmail = $this->user_model->checkEmail($this->input->post('email'));
        if($cekEmail->num_rows() == 0){
            $this->user_model->addUser($this->input->post());
            redirect(site_url());
        }
        else {
            $this->session->set_flashdata('msg', '<div class="alert alert-info">Email sudah terdaftar. <a href="'. site_url('login') .'">Masuk disini</a></div>');
        }

        redirect(site_url('register'));
    }

    private function actionUploadProyek(){
        $this->load->model('project_model');
        $this->project_model->addProject();
        echo "Berhasil";
    }
    
    public function profile(){
        $data['content'] = 'dashboard/user/profile';
        $this->load->view('dashboard/user/main', $data);
    }
    
    public function help(){
        $data['content'] = 'dashboard/user/help';
        $this->load->view('dashboard/user/main', $data);
    }
    
    public function term(){
        $data['content'] = 'dashboard/user/term';
        $this->load->view('dashboard/user/main', $data);
    }
    
    public function policy(){
        $data['content'] = 'dashboard/user/policy';
        $this->load->view('dashboard/user/main', $data);
    }
}
