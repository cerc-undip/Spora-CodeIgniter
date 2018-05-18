<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login_user');
	}
    
    public function view($parameter){
        $this->load->view('login/'.$parameter);
    }
}
