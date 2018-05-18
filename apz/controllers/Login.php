<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        
}
