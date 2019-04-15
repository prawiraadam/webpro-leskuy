<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('M_subject');
  	}

	public function subject()
	{
        $data_subject = $this->M_subject->GetSubject();
		$this->load->view('header_view');
        $this->load->view('subject/subject_view',['data'=>$data_subject]);
        $this->load->view('footer_view');
	}

	public function hapussubject($sub_id)
	{
        $this->M_subject->hapus_subject($sub_id);
        
        // nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
	}


	public function tambahsubject()
	{
		$data = [
			"sub_id" => $this->input->post('sub_id'),
			"sub_nama" => $this->input->post('sub_nama'),
			"sub_desc" => $this->input->post('sub_desc'),
			"sub_foto" => $this->input->post('sub_foto'),
		];
        $this->M_subject->tambah_subject($data);
        
        // nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function editsubject($sub_id)
	{
		$data = [
			"sub_nama" => $this->input->post('sub_nama'),
			"sub_desc" => $this->input->post('sub_desc'),
			"sub_foto" => $this->input->post('sub_foto'),
		];
        $this->M_subject->edit_subject($sub_id,$data);
        
		// nanti diganti
		redirect('/index.php/web/mahasiswa', 'refresh');
    }
}