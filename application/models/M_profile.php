<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

//COMPLETE ALL FUNCTION IN HERE

public function Get_Profile($u_name){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username',$u_name);
    $query = $this->db->get();
    return $query->row();
}
}