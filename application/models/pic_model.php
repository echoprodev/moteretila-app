<?php 

class pic_model extends CI_Model{

    public function get_pic() {
        return $this->db->get('tb_pic')->result();
    }

    public function get_pic_byid($id){
        return $this->db->get_where('tb_pic', ['id_pic' => $id])->row();
    }

    public function tambah_pic() {
        $data = [
            'nama_pic' => $this->input->post('nama_pic')
        ];
        $this->db->insert('tb_pic', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data pic berhasil ditambahkan');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data pic gagal ditambahkan');
        }
    }

    public function hapus_pic($id){
        $this->db->delete('tb_pic', ['id_pic'=> $id]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data pic berhasil dihapus');
        }else{
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data pic gagal dihapus');
        }
    }

    public function ubah_pic($id)
    {
        $data = [
            'nama_pic' => $this->input->post('nama_pic')
        ];
        $this->db->update('tb_pic', $data, ['id_pic' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data pic berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data pic gagal diubah');
        }
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pic');

        return $this->db->get()->result();
    }

    public function get_all_records() {
        $this->db->where('deleted_at', NULL);
        return $this->db->get('tb_pic')->result();
    }

    public function trash_record($id) {
        $data = array('deleted_at' => date('Y-m-d H:i:s'));
        $this->db->where('id_pic', $id);
        $this->db->update('tb_pic', $data);
    }

    public function restore_record($id) {
        $data = array('deleted_at' => NULL);
        $this->db->where('id_pic', $id);
        $this->db->update('tb_pic', $data);
    }
}

?>