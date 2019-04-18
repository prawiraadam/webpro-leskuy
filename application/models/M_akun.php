<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {

    public function regis($data){
        $this->db->insert('user',$data);
    }

    public function cek_login($data){
        $query = $this->db->get_where('user',array('email' => $data['email'],'password' => $data['password']));
        $rows = $query->num_rows();
        return $rows>0;
    }

    public function get_username($data){
        $query = $this->db->get_where('user',array('email' => $data['email'],'password' => $data['password']));
        $res = $query->row();
        return $res->username;
    }

}