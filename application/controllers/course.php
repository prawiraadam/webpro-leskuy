<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_course extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('M_course');
  	}

	public function course()
	{
        $data_course = $this->M_course->Getcourse();
		$this->load->view('header_view');
        $this->load->view('course/course_view',['data'=>$data_course]);
        $this->load->view('footer_view');
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