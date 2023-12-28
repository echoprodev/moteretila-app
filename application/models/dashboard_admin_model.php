<?php 

class dashboard_model extends CI_Model{

    public function getCountTindakLanjut() {
        return $this->db->count_all('tb_tindak_lanjut');
    }
    public function getCountUnit() {
        return $this->db->count_all('tb_unit');
    }
    public function getCountUsers() {
        return $this->db->count_all('tb_users');
    }
}