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

    public function cek_loginAdmin($data){
        $query = $this->db->get_where('admin',array('email' => $data['email'],'password' => $data['password']));
        $rows = $query->num_rows();
        return $rows>0;
    }

    public function cek_regis($data){
        $query = $this->db->get_where('user',array('email' => $data['email']));
        $res = $query->row();
        return $res;
    }

    public function get_username($data){
        $query = $this->db->get_where('user',array('email' => $data['email'],'password' => $data['password']));
        $res = $query->row();
        return $res->username;
    }

    public function insert_user($data){
        $new_user = array(
            'username' => $data['u_name'],
            'email' => $data['email'],
            'password' => $data['password']
        );
        $this->db->insert('user', $new_user);
    }

}