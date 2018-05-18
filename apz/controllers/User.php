<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function view($page){
        if($page=='login'){
            if($this->input->post('login')){
                $this->actionLogin();
            }
            else {
                $data['message'] = $this->session->flashdata('msg');
                $this->load->view('login/user', $data);
            }
        }
        else if($page=='register'){
            $this->load->view('register/user');
        }
    }
    
    private function actionLogin(){
        $cekEmail = $this->user_model->checkEmail($this->input->post('email'));

        if($cekEmail->num_rows() > 0){
            $user = $this->user_model->getUser($this->input->post('email'));

            if(password_verify($this->input->post('password'), $user->password)){
                $data_session = array(
                    'login' => true,
                    'email' => $user->email,
                    'nama'  => $user->nama
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
}
