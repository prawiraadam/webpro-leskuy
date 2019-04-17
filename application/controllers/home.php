<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('M_subject');
  	}

	public function index()
	{
        $data_subject = $this->M_subject->GetSubject();
		$this->load->view('navbar');
        $this->load->view('home',['subject'=>$data_subject]);
        $this->load->view('footer');
	}

	public function login()
	{
        $data_subject = $this->M_subject->GetSubject();
		$this->load->view('login-navbar');
        $this->load->view('login',['data'=>$data_subject]);
        $this->load->view('footer');
	}

	public function subjek()
	{
        $data_subject = $this->M_subject->GetSubject();
		$this->load->view('login-navbar');
        $this->load->view('subject/subject_view',['subject'=>$data_subject]);
        $this->load->view('footer');
	}

	public function about()
	{
        $data_subject = $this->M_subject->GetSubject();
		$this->load->view('login-navbar');
        $this->load->view('aboutus',['data'=>$data_subject]);
        $this->load->view('footer');
	}

	public function tnc()
	{
		// $this->load->view('login-navbar');
        $this->load->view('tnc');
        // $this->load->view('footer');
	}
}