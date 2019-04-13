<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {
	
	public function GetSubject(){
		$this->db->select('*');
		$this->db->from('subject');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_subject($sub_id)
	{
		$this->db->where('sub_id',$sub_id);
		$this->db->delete('subject');
	}

	public function edit_subject($sub_id,$data)
	{
		$this->db->where('sub_id',$sub_id);
		return $this->db->update('subject',$data);
	}

	public function tambah_subject($data)
	{
		return $this->db->insert('subject',$data);	
	}

}
