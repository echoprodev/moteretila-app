<?php 

class unit_model extends CI_Model{

    public function get_unit() {
        return $this->db->get('tb_unit')->result();
    }

    public function get_unit_byid($id){
        return $this->db->get_where('tb_unit', ['id_unit' => $id])->row();
    }

    public function cek_duplikat_unit($nama_unit) {
        $this->db->where('nama_unit', $nama_unit);
        $query = $this->db->get('tb_unit'); 
        return $query->num_rows() > 0;
    }

    public function tambah_unit() 
    {
        $data = [
            'nama_unit' => $this->input->post('nama_unit')
        ];
        $this->db->insert('tb_unit', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data unit berhasil ditambahkan');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data unit gagal ditambahkan');
        }
    }

    public function hapus_unit($id){
        $this->db->delete('tb_unit', ['id_unit'=> $id]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data unit berhasil dihapus');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data unit gagal dihapus');
        }
    }

    public function ubah_unit($id)
    {
        $data = [
            'nama_unit' => $this->input->post('nama_unit')
        ];
        $this->db->update('tb_unit', $data, ['id_unit' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data unit berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data unit gagal diubah');
        }
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_unit');

        return $this->db->get()->result();
    }
}

?>