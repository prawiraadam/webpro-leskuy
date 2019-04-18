<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
		$this->load->model('M_profile');
		if($this->session->userdata('status') != "signed"){
			redirect('login');
		}
  	}

	public function profile($u_name)
	{
        $data_user = $this->M_profile->Get_Profile($u_name);
		$this->load->view('login-navbar');
        $this->load->view('profile/profile_page',['data'=>$data_user]);
        $this->load->view('footer');
    }
}