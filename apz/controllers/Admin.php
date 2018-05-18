<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function view(){
        $this->load->view('login/admin');
    }
    
    public function actionLogin(){
        $email = $this->$input->post('etEmail');
        $password = $this->$input->post('etPassword');
    }
        
}
