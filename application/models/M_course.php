<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_course extends CI_Model {
	
	public function Getcourse(){
		$this->db->select('*');
		$this->db->from('course');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_course($sub_id)
	{
		$this->db->where('sub_id',$sub_id);
		$this->db->delete('course');
	}

	public function edit_course($sub_id,$data)
	{
		$this->db->where('sub_id',$sub_id);
		return $this->db->update('course',$data);
	}

	public function tambah_course($data)
	{
		return $this->db->insert('course',$data);	
	}

}
