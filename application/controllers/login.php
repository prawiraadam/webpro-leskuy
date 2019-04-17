<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('M_login');
  	}

	public function index()
	{
        $this->load->view('login-navbar');
        $this->load->view('login');
        $this->load->view('footer');
	}

	public function login_action()
	{
        // $data_subject = $this->M_subject->GetSubject();
		$this->load->view('login-navbar');
        $this->load->view('login',['data'=>$data_subject]);
        $this->load->view('footer');
	}
}