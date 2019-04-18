<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

public function __construct()
 {
     // Load M_Web as parents in here.
     parent::__construct();
     $this->load->model('M_akun');
  }

public function index()
{
    // $data_subject = $this->M_subject->GetSubject();
    $this->load->view('login-navbar');
    $this->load->view('login');
    $this->load->view('footer');
}

public function login_action()
{
    $errors = array();
    $data = array(
        'email' => $_POST['email'], 
        'password' => md5($_POST['password'])
    );

    if (empty($data['email'])) {
        array_push($errors, "Username is required");
      }
    if (empty($data['password'])) {
        array_push($errors, "Password is required");
    }

    if (count($errors)==0)
    {
        $cek =  $this->M_akun->cek_login($data);
        if ($cek){
            $u_name = $this->M_akun->get_username($data);
            $data_session = array(
                'email' => $data['email'],
                'u_name' => $u_name,
                'status' => "signed"
            );
            $this->session->set_userdata($data_session);
            $message = "Kamu telah berhasil login!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('home');
        }else{
            $message = "Email atau Password salah";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect(site_url("login/index"));
        }
    }else{
        $message = "Email atau Password tidak boleh kosong";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    
}
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('login/index'));
    }
}