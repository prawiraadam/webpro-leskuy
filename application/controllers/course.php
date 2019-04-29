<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
		 parent::__construct();
		$this->load->model('M_profile');		 
 		$this->load->model('M_course');
  	}

	public function index($subject_id)
	{
        $data_course = $this->M_course->Getcourse($subject_id);
		$this->load->view('login-navbar');
        $this->load->view('course/course_view',['course'=>$data_course]);
        $this->load->view('footer');
	}

	public function course($subject_id)
	{
		if($this->session->userdata('u_name')){
			$u_name = $this->session->userdata('u_name');
			$data_user = $this->M_profile->Get_Profile($u_name);
			$data_course = $this->M_course->Getcourse($subject_id);
			$course_id =  $this->M_course->Get_CourseOwnsId($data_user->user_id);
			$arr = array_column($course_id,"course_id");
			$data = array(
				// 'user' => $data_user,
				'course' => $data_course,
				'course_id' =>$arr
			);
		}else{
			$data_course = $this->M_course->Getcourse($subject_id);
			// $course_id =  $this->M_course->Get_CourseOwnsId($data_user->user_id);
			$data = array(
				// 'user' => $data_user,
				'course' => $data_course
				// 'course_id' =>$course_id
			);
		};
		$this->load->view('login-navbar');
        $this->load->view('course/course_view',['data'=>$data]);
        $this->load->view('footer');
	}

	public function belicourse($course_id)
	{
		if($this->session->userdata('status')){
			$u_name = $this->session->userdata('u_name');
			$data_user = $this->M_profile->Get_Profile($u_name);
			$data = array(
				'user_id' => $data_user->user_id,
				'course_id' => $course_id
			);
			$this->M_course->insert_CourseOwns($data);
		}else{
			redirect(site_url("login/index"),'belum login');
		// redire
		// }
        // // nanti diganti
		// redirect('/index.php/web/mahasiswa', 'refresh');
	}
}

	public function hapuscourse($sub_id)
	{
        $this->M_course->hapus_course($sub_id);
        
        // nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
	}


	public function tambahcourse()
	{
		$data = [
			"sub_id" => $this->input->post('sub_id'),
			"sub_nama" => $this->input->post('sub_nama'),
			"sub_desc" => $this->input->post('sub_desc'),
			"sub_foto" => $this->input->post('sub_foto'),
		];
        $this->M_course->tambah_course($data);
        
        // nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function editcourse($sub_id)
	{
		$data = [
			"sub_nama" => $this->input->post('sub_nama'),
			"sub_desc" => $this->input->post('sub_desc'),
			"sub_foto" => $this->input->post('sub_foto'),
		];
        $this->M_course->edit_course($sub_id,$data);
        
		// nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
    }
}