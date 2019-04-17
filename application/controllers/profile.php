<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		// $this->load->model('M_course');
  	}

	public function index()
	{
        // $data_course = $this->M_course->Getcourse();
		$this->load->view('login-navbar');
        $this->load->view('profile/profile_page');
        $this->load->view('footer');
    }
}