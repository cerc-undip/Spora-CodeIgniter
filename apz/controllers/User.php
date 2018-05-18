<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    private function cekLogin(){
        if($this->session->userdata('login'))
            redirect(site_url());
    }
    private function cekNotLogin(){
        if(!$this->session->userdata('login'))
            redirect(site_url('login'));
    }

    private function generateAlamat(){
        $alamat = "";
        $n = "1234567890qwertyuiopasdfghjklzxcvbnm";
        for($i=0;$i<12;$i++){
          $alamat .= $n[rand(0, strlen($n) - 1)];
        }
        return 'prj_'.$alamat;
    }

    public function view($page){
        if($page == 'login'){
            $this->cekLogin();

            if($this->input->post('login')){
              $this->actionLogin();
            } else {
              $data['message'] = $this->session->flashdata('msg');
              $this->load->view('login/user', $data);
            }
        } else if($page == 'register'){
            $this->cekLogin();
            if($this->input->post('register')){
              $this->actionRegister();
            } else {
              $data['message'] = $this->session->flashdata('msg');
              $this->load->view('register/user', $data);
            }
        }
        else if($page == 'dashboard'){
            $this->cekNotLogin();
            if($this->input->post('now')){
                $this->now();
            } else if($this->input->post('own')){
                $this->own();
            } else if($this->input->post('addProject')){
                $this->addProject();
            } else {
                $this->now();
            }
        }
        else if($page == 'upload_project'){
            $this->cekNotLogin();
            $confirmed = $this->user_model->getVolunteerConfirm();

            if($confirmed == 1){
                if($this->input->post('upload')){
                    $this->actionUploadProyek();
                }
                else {
                    $data['message'] = $this->session->flashdata('msg');
                    $this->load->view('dashboard/user/upload_project', $data);
                }
            }
            else {
                echo "Akun anda belum terkonfirmasi menjadi volunteer. Harap tunggu hingga Admin mengkonfirmasi, Terima kasih";
            }

        }
        else if($page == 'daftar_volunteer'){
            $this->cekNotLogin();

            $cek = $this->user_model->checkVolunteer();

            if($this->input->post('daftar')){
                if($cek->num_rows() > 0){
                    redirect(site_url('dashboard'));
                }
                else {
                    $this->actionDaftarVol();
                }
            }
            else {
                $data['message'] = $this->session->flashdata('msg');
                $this->load->view('dashboard/user/daftar_volunteer', $data);
            }
        }
    }

    private function actionLogin(){
        $cekEmail = $this->user_model->checkEmail($this->input->post('email'));
        if($cekEmail->num_rows() > 0){
            $user = $this->user_model->getUser($this->input->post('email'));
            if(password_verify($this->input->post('password'), $user->password)){
                $data_session = array(
                    'login'  => true,
                    'id_akun'=> $user->id,
                    'email'  => $user->email,
                    'nama'   => $user->nama,
                    'priv'   => $user->priv
                );
                $this->session->set_userdata($data_session);
                redirect(site_url());
            } else {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger">Password salah.</div>');
            }
          } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Email belum terdaftar.</div>');
        }
        redirect(site_url('login'));
      }

    private function actionRegister(){
        $cekEmail = $this->user_model->checkEmail($this->input->post('email'));
        if($cekEmail->num_rows() == 0){
            $this->user_model->addUser($this->input->post());
            redirect(site_url());
        }
        else {
            $this->session->set_flashdata('msg', '<div class="alert alert-info">Email sudah terdaftar. <a href="'. site_url('login') .'">Masuk disini</a></div>');
        }

        redirect(site_url('register'));
    }

    private function actionUploadProyek(){
        $config['upload_path']   = APPPATH.'../uploads/projects/';
        $config['file_name']     = $this->generateAlamat();
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']      = 500;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
            $message = '<h4>'. $this->upload->display_errors() .'</h4>';
            $this->session->set_flashdata('msg', $message);
        }
        else{
            $this->load->model('project_model');
            $data = $this->upload->data();
            $this->project_model->addProject($data['file_name']);
            $message = '<p>Proyek berhasil diupload. Kami akan memberitahukan kepada Anda setiap ada perkembangan.</p>';
            $this->session->set_flashdata('msg', $message);
        }

        redirect(site_url('dashboard/upload-project'));
    }

    private function actionDaftarVol(){
        $cek = $this->user_model->checkVolunteerByKTP($this->input->post('no_ktp'));

        if($cek->num_rows() == 0){
            $this->user_model->addVolunteer();
            $this->session->set_flashdata('msg', '<h1>Terima kasih sudah mendaftar, itikad baik Anda sangat kami apresiasi. Silahkan tunggu sampai Admin Spora mengkonfirmasi pendaftaran Anda.</h1>');
        }
        else {
            $this->session->set_flashdata('msg', '<h1>No. KTP telah terdaftar sebelumnya.</h1>');
        }

        redirect(site_url('dashboard/daftar-volunteer'));
    }

    public function profile(){
        $this->cekNotLogin();

        if($this->input->post('simpan_profil')){
            $this->user_model->updateUser();
            $this->session->set_userdata(['nama' => $this->input->post('nama')]);
            redirect(site_url('profile'));
        }
        else if($this->input->post('ubah_pass')){
            $user = $this->user_model->getUser($this->session->userdata('email'));

            if(password_verify($this->input->post('old-password'), $user->password)){
                if($this->input->post('password') == $this->input->post('password2')){
                    $this->user_model->updatePass();
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('msg', 'Password berhasil diganti.');
                }
                else {
                    // password tidak sama
                    $this->session->set_flashdata('type', 'warning');
                    $this->session->set_flashdata('msg', 'Password tidak cocok.');
                }
            }
            else {
                // Password lama salah
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('msg', 'Password salah.');
            }

            redirect(site_url('profile'));
        }
        else {
            $data['content'] = 'dashboard/user/profile';
            $data['message'] = $this->session->flashdata('msg');
            $data['type']    = $this->session->flashdata('type');
            $this->load->view('dashboard/user/main', $data);
        }
    }
<<<<<<< Updated upstream
    
    public function now(){
        $data['content'] = 'dashboard/user/dashboard_now';
        $this->load->view('dashboard/user/main', $data);
    }
    
    public function own(){
        $data['content'] = 'dashboard/user/dashboard_own';
        $this->load->view('dashboard/user/main', $data);
    }
    
    public function addProject(){
        $data['message'] = $this->session->flashdata('msg');
        $data['content'] = 'dashboard/user/dashboard_add';
        $this->load->view('dashboard/user/main', $data);
    }
    
=======

>>>>>>> Stashed changes
    public function shop(){
        $data['content'] = 'dashboard/user/shop';
        $this->load->view('dashboard/user/main', $data);
    }

    public function help(){
        $data['content'] = 'dashboard/user/help';
        $this->load->view('dashboard/user/main', $data);
    }

    public function term(){
        $data['content'] = 'dashboard/user/term';
        $this->load->view('dashboard/user/main', $data);
    }//aku harap aku ganteng kaya mas mukhlish

    public function policy(){
        $data['content'] = 'dashboard/user/policy';
        $this->load->view('dashboard/user/main', $data);
    }
}
