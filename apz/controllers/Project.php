<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function index(){
        $data['content'] = 'project/portal';
        $this->load->view('dashboard/user/main', $data);
    }

    public function detailProject($id)
    {
      $data['view_name'] = 'detailProject';
      $this->load->view('template/main',$data);
    }


}
