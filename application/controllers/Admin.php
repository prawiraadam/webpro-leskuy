<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_User');
 		$this->load->model('M_course');
 		$this->load->model('M_Univ');
 		$this->load->model('M_video');
 		$this->load->model('M_subject');
  	}

  	public function index(){
  		$this->load->view('Admin/AdminSideBar_view');
  		$user = $this->M_User->getUser();
  		$this->load->view('Admin/AdminManageUser', ['user' => $user]);
  	}

  	public function univ(){
  		$this->load->view('Admin/AdminSideBar_view');
  		$univ = $this->M_Univ->getUniv();
  		$this->load->view('Admin/AdminManageUniversity', ['university' => $univ]);
  	}

  	public function subject(){
  		$this->load->view('Admin/AdminSideBar_view');
  		$sbj = $this->M_subject->getSubject();
  		$this->load->view('Admin/AdminManageSubject', ['subject' => $sbj]);
  	}

  	public function course(){
		$this->load->view('Admin/AdminSideBar_view');
		$course = $this->M_course->getCourse();
		$this->load->view('Admin/AdminManageCourse', ['course' => $course]);
  	}

  	public function video(){
  		$this->load->view('Admin/AdminSideBar_view');
  		$video = $this->M_video->getVideo();
  		$this->load->view('Admin/AdminManageVideo', ['video' => $video]);
  	}

  	// Add to lists
  	public function addUser(){
  		$data = [
  			"user_id" => $this->input->post('user_id'),
  			"username" => $this->input->post('username'),
  			"email" => $this->input->post('email'),
  			"password" => $this->input->post('password'),
  		];
  		$this->M_User->tambah_user($data);
  		redirect('/Admin/index', 'refresh');
  	}

  	public function addUniversity(){
  		$data = [
  			"univ_id" => $this->input->post('univ_id'),
  			"univ_name" => $this->input->post('univ_name'),
  			"univ_logo" => $this->input->post('univ_logo'),
  		];
  		$this->M_Univ->tambah_univ($data);
  		redirect('/Admin/univ', 'refresh');
  	}

  	public function addVideo(){
  		$data = [
  			"vid_id" => $this->input->post('vid_id'),
  			"course_id" => $this->input->post('course_id'),
  			"univ_id" => $this->input->post('univ_id'),
  			"vid_nama" => $this->input->post('vid_nama'),
  			"vid_content" => $this->input->post('vid_content'),
  			"vid_desc" => $this->input->post('vid_desc'),
  			"vid_thumbnail" => $this->input->post('vid_thumbnail'),
  			"vid_maker" => $this->input->post('vid_maker'),
  		];
  		$this->M_video->tambah_video($data);
  		redirect('/Admin/video', 'refresh');
  	}

  	public function addCourse(){
  		$data = [
  			"course_id" => $this->input->post('course_id'),
  			"sub_id" => $this->input->post('sub_id'),
  			"univ_id" => $this->input->post('univ_id'),
  			"course_name" => $this->input->post('course_name'),
  			"course_desc" => $this->input->post('course_desc'),
  			"course_date" => $this->input->post('course_date'),
  			"course_price" => $this->input->post('course_price'),
  		];
  		$this->M_course->tambah_course($data);
  		redirect('/Admin/course', 'refresh');
  	}

  	public function addSubject(){
  		$data = [
  			"sub_id" => $this->input->post('sub_id'),
  			"sub_nama" => $this->input->post('sub_nama'),
  			"sub_desc" => $this->input->post('sub_desc'),
  			"sub_foto" => $this->input->post('sub_foto'),
  		];
  		$this->M_subject->tambah_subject($data);
  		redirect('/Admin/subject', 'refresh');
  	}

  	//Delete to list
  	public function deleteUser($user_id){
  		$this->M_User->hapus_user($user_id);
  		redirect('/Admin/index', 'refresh');
  	}

  	public function deleteVideo($video_id){
  		$this->M_video->hapus_video($video_id);
  		redirect('/Admin/video', 'refresh');
  	}

  	public function deleteUniversity($univ_id){
  		$this->M_Univ->hapus_univ($univ_id);
  		redirect('/Admin/univ', 'refresh');
  	}

  	public function deleteCourse($course_id){
  		$this->M_course->hapus_course($course_id);
  		redirect('/Admin/course', 'refresh');
  	}

  	public function deleteSubject($sub_id){
  		$this->M_subject->hapus_subject($sub_id);
  		redirect('/Admin/subject', 'refresh');
  	}

  	//Edit list
	public function editUser($user_id){
  		$data = [
  			"username" => $this->input->post('username'),
  			"email" => $this->input->post('email'),
  			"password" => $this->input->post('password'),
  		];
  		$this->M_User->edit_user($user_id, $data);
  		redirect('/Admin/index', 'refresh');
  	}

  	public function editUniversity($univ_id){
  		$data = [
  			"univ_id" => $this->input->post('univ_id'),
  			"univ_name" => $this->input->post('univ_name'),
  			"univ_logo" => $this->input->post('univ_logo'),
  		];
  		$this->M_Univ->edit_univ($univ_id, $data);
  		redirect('/Admin/univ', 'refresh');
  	}

  	public function editVideo($vid_id){
  		$data = [
  			"course_id" => $this->input->post('course_id'),
  			"univ_id" => $this->input->post('univ_id'),
  			"vid_nama" => $this->input->post('vid_nama'),
  			"vid_content" => $this->input->post('vid_content'),
  			"vid_desc" => $this->input->post('vid_desc'),
  			"vid_thumbnail" => $this->input->post('vid_thumbnail'),
  			"vid_maker" => $this->input->post('vid_maker'),
  		];
  		$this->M_video->edit_video($vid_id, $data);
  		redirect('/Admin/video', 'refresh');
  	}

  	public function editCourse($course_id){
  		$data = [
  			"course_id" => $this->input->post('course_id'),
  			"sub_id" => $this->input->post('sub_id'),
  			"univ_id" => $this->input->post('univ_id'),
  			"course_name" => $this->input->post('course_name'),
  			"course_desc" => $this->input->post('course_desc'),
  			"course_date" => $this->input->post('course_date'),
  			"course_price" => $this->input->post('course_price'),
  		];
  		$this->M_course->edit_course($course_id, $data);
  		redirect('/Admin/course', 'refresh');
  	}

  	public function editSubject($sub_id){
  		$data = [
  			"sub_id" => $this->input->post('sub_id'),
  			"sub_nama" => $this->input->post('sub_nama'),
  			"sub_desc" => $this->input->post('sub_desc'),
  			"sub_foto" => $this->input->post('sub_foto'),
  		];
  		$this->M_subject->edit_subject($sub_id, $data);
  		redirect('/Admin/subject', 'refresh');
  	} 	
}