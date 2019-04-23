<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Univ extends CI_model {
	
	public function getUniv(){
		$this->db->select('*');
		$this->db->from('university');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_univ($univ_id){
		$this->db->where('univ_id', $univ_id);
		$this->db->delete('university');
	}

	public function edit_univ($univ_id, $data){
		$this->db->where('univ_id', $univ_id);
		return $this->db->update('university', $data);
	}

	public function tambah_univ($data){
		return $this->db->insert('university', $data);
	}
}