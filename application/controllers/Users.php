<?php 

class Users extends CI_Controller{

    public function index() {
        $this->load->model('users_model');
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'MOTERETILA | Data Users';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('users/users', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->model('users_model');
        if(isset($_POST['simpan'])){
            $cek_username = $this->users_model->cek_username();
            if($cek_username->num_rows()>0){
                $this->session->set_flashdata('status', 'Gagal');
                $this->session->set_flashdata('pesan', 'Username sudah terdaftar di sistem');
            } else {
                $this->users_model->tambah_users();
            }
            redirect('users');
        }else{
            $data['title'] = 'MOTERETILA | Tambah Data Users';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('users/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id) {
        $this->load->model('users_model');
        $this->users_model->hapus_users($id);
        redirect('users');
    }

    public function ubah($id)
    {
        $this->load->model('users_model');
        if (isset($_POST['simpan'])) {
            $cek_username = $this->users_model->cek_username_ubah($id);
            if($cek_username->num_rows()>0){
                $this->session->set_flashdata('status', 'Gagal');
                $this->session->set_flashdata('pesan', 'Username sudah terdaftar di sistem');
            } else {
                $this->users_model->ubah_users($id);
            }
            redirect('users');
        } else {
            $data['users'] = $this->users_model->get_users_byid($id);
            $data['title'] = "MOTERETILA | Ubah Users";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('users/ubah', $data);
            $this->load->view('template/footer');
        }
    }
}
?>
