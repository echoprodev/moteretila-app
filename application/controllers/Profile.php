<?php

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

    public function index() {
        $data['title'] = 'MOTERETILA | Profil';

        // Pastikan $online didefinisikan bahkan jika kosong
        $data['online'] = $data['profile'] ?? ['nama_lengkap' => '', 'username' => ''];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('profile/profile', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $this->load->model('profile_model');
        if (isset($_POST['simpan'])) {
            $cek_username = $this->users_model->cek_username_ubah($id);
            if($cek_username->num_rows()>0){
                $this->session->set_flashdata('status', 'Gagal');
                $this->session->set_flashdata('pesan', 'Username sudah terdaftar di sistem');
            } else {
                $this->profile_model->ubah_profile($id);
            }
            redirect('profile');
        } else {
            $data['profile'] = $this->profile_model->get_profile_byid($id);
            $data['title'] = "MOTERETILA | Ubah Profil";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('profile/ubah', $data);
            $this->load->view('template/footer');
        }
    }
}
