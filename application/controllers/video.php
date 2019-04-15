<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('M_video');
  	}


	public function videos($course_id)
	{
		$data_video = $this->M_video->Get_Video($course_id);
		$this->load->view('page_header');
		$this->load->view('video_page',['data'=>$data_video]);
	}
}