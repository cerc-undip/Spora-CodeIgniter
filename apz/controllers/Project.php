<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('produk_model');
        $this->load->model('project_model');
    }
    
    public function index(){
        $data['project'] = $this->project_model->getProject()->result();
        $data['content'] = 'project/portal';
        $this->load->view('dashboard/user/main', $data);
    }

    public function detailProject($id)
    {
        $data['project'] = $this->project_model->getProjectById($id)->result();
        $data['content'] = 'project/detailProject';
        $this->load->view('dashboard/user/main', $data);
    }


}
