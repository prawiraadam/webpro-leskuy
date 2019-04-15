<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function Get_Video($course_id){
		$this->db->select('*');
		$this->db->from('videos');
		$this->db->where('course_id',$course_id);
		$query = $this->db->get();
		return $query->result();
    }
}
