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
            // $message = "Kamu telah berhasil login!";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('home');
        }else{
            // $message = "Email atau Password salah";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            redirect(site_url("login/index"));
        }
    }else{
        $message = "Email atau Password tidak boleh kosong";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    
}

public function registration_action()
{
    $errors = array();
    $data = array(
        'u_name' => $_POST['name'],
        'email' => $_POST['email'], 
        'password' => md5($_POST['password']),
        'conf_password' => md5($_POST['conf_password'])
    );
  if ($data['password'] != $data['conf_password']) {
	array_push($errors, "");
  $message = "Kedua password tidak sama";
       echo "<script type='text/javascript'>alert('$message');</script>";
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user = $this->M_akun->cek_regis($data);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
       array_push($errors, "");
       $message = "Email telah tersedia";
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $pass1 = md5($pass1);//encrypt the password before saving in the database
  	$this->M_akun->insert_user($data);
  	// $message = "Terima kasih telah mendaftar, silakan login!";
    // echo "<script type='text/javascript'>alert('$message');</script>";
    redirect('home');
  }
}

public function logout(){
    $this->session->sess_destroy();
    redirect(site_url('home'));
}
}