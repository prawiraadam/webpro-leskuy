<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_model {
	public function getUser(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_user($user_id){
		$this->db->where('user_id', $user_id);
		$this->db->delete('user');
	}

	public function edit_user($user_id, $data){
		$this->db->where('user_id', $user_id);
		return $this->db->update('user', $data);
	}

	public function tambah_user($data){
		return $this->db->insert('user', $data);
	}
}