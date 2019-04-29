<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function Get_Video($course_id){
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('course_id',$course_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getVideoAdmin(){
		$this->db->select('*');
		$this->db->from('video');
		$query = $this->db->get();
		return $query->result();
	}

	public function video_clicked($vid_id,$course_id){
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where(array('course_id'=>$course_id,'vid_id'=>$vid_id));
		$query = $this->db->get();
		return $query->result();
    }

    public function hapus_video($video_id){
		$this->db->where('vid_id', $video_id);
		$this->db->delete('video');
	}

	public function edit_video($video_id, $data){
		$this->db->where('vid_id', $video_id);
		return $this->db->update('video', $data);
	}

	public function tambah_video($data){
		return $this->db->insert('video', $data);
	}
}
