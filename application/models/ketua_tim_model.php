<?php 

class ketua_tim_model extends CI_Model{

    public function get_ketua_tim() {
        return $this->db->get('tb_ketua_tim')->result();
    }

    public function get_ketua_tim_byid($id){
        return $this->db->get_where('tb_ketua_tim', ['id_ketua_tim' => $id])->row();
    }

    public function tambah_ketua_tim() {
        $data = [
            'nama_ketua_tim' => $this->input->post('nama_ketua_tim'),
            'no_telp_ketua_tim' => $this->input->post('no_telp_ketua_tim'),
            'email_ketua_tim' => $this->input->post('email_ketua_tim')
        ];
        $this->db->insert('tb_ketua_tim', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data ketua tim berhasil ditambahkan');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data ketua tim gagal ditambahkan');
        }
    }

    public function hapus_ketua_tim($id){
        $this->db->delete('tb_ketua_tim', ['id_ketua_tim'=> $id]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data ketua tim berhasil dihapus');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data ketua tim gagal dihapus');
        }
    }

    public function ubah_ketua_tim($id)
    {
        $data = [
            'nama_ketua_tim' => $this->input->post('nama_ketua_tim'),
            'no_telp_ketua_tim' => $this->input->post('no_telp_ketua_tim'),
            'email_ketua_tim' => $this->input->post('email_ketua_tim')
        ];
        $this->db->update('tb_ketua_tim', $data, ['id_ketua_tim' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data ketua tim berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data ketua tim gagal diubah');
        }
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_ketua_tim');

        return $this->db->get()->result();
    }
}

?>