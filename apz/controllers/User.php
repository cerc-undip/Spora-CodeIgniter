<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function view($page){
        if($page=='login'){
            $this->load->view('login/user');
        } else if($page=='register'){
            $this->load->view('register/user');
        } else if($page=='dashboard'){
            $this->load->view('dashboard/user/main');
        }
    }
    
    public function actionLogin(){
        $email = $this->$input->post('etEmail');
        $password = $this->$input->post('etPassword');
    }
        
}
