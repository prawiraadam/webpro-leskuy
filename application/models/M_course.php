<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_course extends CI_Model {
	
	public function Getcourse($subject_id){
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->join('course','course.sub_id=subject.sub_id');
		$this->db->where('course.sub_id',$subject_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function Get_CourseOwns($user_id){
		$this->db->select('*');
		$this->db->from('course_owns');
		$this->db->join('course','course_owns.course_id=course.course_id');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_course($course_id)
	{
		$this->db->where('course_id',$course_id);
		$this->db->delete('course');
	}

	public function edit_course($course_id,$data)
	{
		$this->db->where('course_id',$course_id);
		return $this->db->update('course',$data);
	}

	public function tambah_course($data)
	{
		return $this->db->insert('course',$data);	
	}

}
