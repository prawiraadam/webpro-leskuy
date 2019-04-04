<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		// $this->load->model('M_web');
	}
		
	// public $data = array(
	// 	"nim" => "1301170012",
	// 	"nama" => "Ahmad Satriamulya",
	// 	"kampus"=> "Telkom University"
	// );

	public function index()
	{
		$this->load->view("page_header");
		$this->load->view("page_index");
	}

	public function mahasiswa()
	{
		$data['data_keyview'] = $this->M_web->GetMahasiswa_nim();
		 
		$this->load->view("page_header");
		$this->load->view("page_mahasiswa", $data);

	}

	public function jurusan()
	{
		$data['data_keyview'] = $this->M_web->Getjurusan_nim();

		$this->load->view("page_header");
		$this->load->view("page_jurusan");
	}
}
