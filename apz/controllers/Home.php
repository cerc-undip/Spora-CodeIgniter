<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
      $this->load->view('landing');
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect(site_url());
    }


}
