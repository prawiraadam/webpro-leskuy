<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
		if(!$this->session->userdata('status')){
			redirect('login');
		}
		$this->load->model('M_profile');
		$this->load->model('M_course');

  	}

	public function profile($u_name)
	{
		$data_user = $this->M_profile->Get_Profile($u_name);
		$data_course =  $this->M_course->Get_CourseOwns($data_user->user_id);
		$course_id =  $this->M_course->Get_CourseOwnsId($data_user->user_id);
		$data = array(
			'user' => $data_user,
			'course' => $data_course,
			'course_id' =>$course_id
		);
		$this->load->view('login-navbar');
        $this->load->view('profile/profile_page',['data'=>$data]);
        $this->load->view('footer');
    }
}