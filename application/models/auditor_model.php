<?php 

class auditor_model extends CI_Model{

    public function get_auditor() {
        return $this->db->get('tb_auditor')->result();
    }

    public function get_auditor_byid($id){
        return $this->db->get_where('tb_auditor', ['id_auditor' => $id])->row();
    }

    public function tambah_auditor() {
        $data = [
            'nama_auditor' => $this->input->post('nama_auditor'),
            'no_telp_auditor' => $this->input->post('no_telp_auditor'),
            'email_auditor' => $this->input->post('email_auditor')
        ];
        $this->db->insert('tb_auditor', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data auditor berhasil ditambahkan');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data auditor gagal ditambahkan');
        }
    }

    public function hapus_auditor($id){
        $this->db->delete('tb_auditor', ['id_auditor'=> $id]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data auditor berhasil dihapus');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data auditor gagal dihapus');
        }
    }

    public function ubah_auditor($id)
    {
        $data = [
            'nama_auditor' => $this->input->post('nama_auditor'),
            'no_telp_auditor' => $this->input->post('no_telp_auditor'),
            'email_auditor' => $this->input->post('email_auditor')
        ];
        $this->db->update('tb_auditor', $data, ['id_auditor' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data auditor berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data auditor gagal diubah');
        }
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_auditor');

        return $this->db->get()->result();
    }
}

?>