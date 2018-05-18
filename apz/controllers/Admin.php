<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function view($page){
        if($page=='login'){
            $this->load->view('login/admin');
        } else if($page=='dashboard'){
            $this->load->view('dashboard/admin/main');
        }
    }
    
    public function actionLogin(){
        $email = $this->$input->post('etEmail');
        $password = $this->$input->post('etPassword');
    }
        
}
