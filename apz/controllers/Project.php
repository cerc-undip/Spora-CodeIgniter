<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function index(){
        $data['view_name'] = 'main';
        $this->load->view('template/main', $data);
    }

    public function detail_proyek(){
        // nanti
    }
        
}
