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
		$this->load->view('navbar');
        $this->load->view('video/video_page',['data'=>$data_video]);
        $this->load->view('footer');
	}

	// public function video_clicked($vid_id)
	// {
	// 	$data_video = $this->M_video->Get_Video($vid_id);
	// 	$this->load->view('navbar');
    //     $this->load->view('video/video_page',['data'=>$data_video]);
    //     $this->load->view('footer');
	// }
}