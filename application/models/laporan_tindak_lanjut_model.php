<?php 

class laporan_tindak_lanjut_model extends CI_Model{
    
    public function get_pertanggal($tanggal)
    {
        $this->db->select('*');
        $this->db->from('tb_tindak_lanjut');
        $this->db->join('tb_unit', 'tb_unit.id_unit = tb_tindak_lanjut.id_unit', 'left');
        $this->db->join('tb_pic', 'tb_pic.id_pic = tb_tindak_lanjut.id_pic', 'left');
        $this->db->join('tb_auditor', 'tb_auditor.id_auditor = tb_tindak_lanjut.id_auditor', 'left');
        $this->db->join('tb_ketua_tim', 'tb_ketua_tim.id_ketua_tim = tb_tindak_lanjut.id_ketua_tim', 'left');
        if ($this->input->post('dari') && $this->input->post('sampai')) {
            // Handle pertanggal form submission
        } elseif ($this->input->post('bulan') && $this->input->post('tahun')) {
            // Handle perbulan form submission
        } elseif ($this->input->post('tahun')) {
            // Handle pertahun form submission
        }

        return $this->db->get()->result();
    }

    public function get_perbulan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_tindak_lanjut');
        $this->db->where('MONTH(tanggal)', $bulan);
        $this->db->where('YEAR(tanggal)', $tahun);

        $query = $this->db->get('tb_tindak_lanjut');

        if ($query) {
            return $query->result();
        } else {
            echo $this->db->error()['message'];
            return false;
        }
    }

    public function get_pertahun($tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_tindak_lanjut');
        $this->db->where('YEAR(tanggal)', $tahun);

        $query = $this->db->get('tb_tindak_lanjut');

        if ($query) {
            return $query->result();
        } else {
            echo $this->db->error()['message'];
            return false;
        }
    }

}