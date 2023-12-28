<?php

class Users_model extends CI_Model
{

    public function get_users()
    {
        return $this->db->get('tb_users')->result();
    }

    public function get_users_byid($id)
    {
        return $this->db->get_where('tb_users', ['id_users' => $id])->row();
    }

    public function cek_username()
    {
        $username = $this->input->post('username');
        return $this->db->get_where('tb_users', ['username' => $username]);
    }

    public function cek_username_ubah($id)
    {
        $username = $this->input->post('username');
        $query = "SELECT * FROM tb_users WHERE username='$username' AND id_users != '$id'";
        return $this->db->query($query);
    }

    public function cek_login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $query = "SELECT `level` FROM `tb_users` WHERE `username` = '$username' AND `password` = '$password'";
        return $this->db->query($query);
    }

    public function tambah_users()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level')
        ];
        $this->db->insert('tb_users', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data users berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data users gagal ditambahkan');
        }
    }

    public function hapus_users($id)
    {
        $this->db->delete('tb_users', ['id_users' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data users berhasil dihapus');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data users gagal dihapus');
        }
    }

    public function ubah_users($id)
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level')
        ];
        $this->db->update('tb_users', $data, ['id_users' => $id]);
        if ($this->db->affected_rows() > 0) {
            if (!empty($this->input->post('password'))) {
                $this->db->update('tb_users', ['password' => md5($this->input->post('password'))], ['id_users' => $id]);
            }
            $this->session->set_flashdata('status', 'Berhasil');
            $this->session->set_flashdata('pesan', 'Data users berhasil diubah');
        } else {
            $this->session->set_flashdata('status', 'Gagal');
            $this->session->set_flashdata('pesan', 'Data users gagal diubah');
        }
    }
}
