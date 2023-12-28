<?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cek_user($username)
    {
        $query = $this->db->query("SELECT * FROM tb_users WHERE username = '$username' ");

        if ($query->num_rows() == 1) 
        {
            return $query->result();
        } else 
        {
            return false;
        }
    }

    public function cek_login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tb_users WHERE username = '$username' and password = '$password' ");
        if ($query->num_rows() == 1) 
        {
            return $query->result();
        } else 
        {
            return false;
        }
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        
        $query = $this->db->get();

        if ($query->num_rows() == 1) 
        {
            return $query->result();
        } else 
        {
            return false;
        }
    }

}
