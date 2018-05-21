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
        $data['project'] = $this->project_model->getProject();
        $data['content'] = 'project/portal';
        $this->load->view('dashboard/user/main', $data);
    }

    public function detailProject($id, $slug){
        $data['project'] = $this->project_model->getProjectById($id, $slug);
        $data['content'] = 'project/detailProject';
        $this->load->view('dashboard/user/main', $data);
    }

    public function reg_project($id, $slug){
        $cek = $this->project_model->checkProject($id, $slug);
        
        if($this->session->userdata('login')){
            if($cek->num_rows() > 0){
                $this->load->model('user_model');

                $vol = $this->user_model->getVolunteer();
                $this->project_model->addAmbilProyek($vol->id, $id);
                redirect(site_url('dashboard/now'));
            }
            else {
                redirect(site_url('project'));
            }
        }
        else {
            redirect(site_url('project'));
        }
    }


}
