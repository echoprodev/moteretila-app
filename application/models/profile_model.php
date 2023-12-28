<?php

class profile_model extends CI_Model {
    
    public function get_profil() {
        return $this->db->get('tb_users')->result();
    }

    public function ubah_profile($id) {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi apakah password diisi sebelum hashing
        if (!empty($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'nama_lengkap' => $nama_lengkap,
                'username' => $username,
                'password' => $hashed_password
            ];
        } else {
            // Jika password kosong, update tanpa mengubah password
            $data = [
                'nama_lengkap' => $nama_lengkap,
                'username' => $username
            ];
        }

        $this->db->update('tb_users', $data, ['id_users' => $id]);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data users berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data users gagal diubah');
        }
    }
}
