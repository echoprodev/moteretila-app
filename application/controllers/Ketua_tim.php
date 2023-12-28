<?php 

class Ketua_tim extends CI_Controller{

    public function index() {
        $this->load->model('ketua_tim_model');
        $data['ketua_tim'] = $this->ketua_tim_model->get_ketua_tim();
        $data['title'] = 'MOTERETILA | Ketua Tim';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('ketua tim/ketua_tim', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->model('ketua_tim_model');
        if(isset($_POST['simpan'])){
            $this->ketua_tim_model->tambah_ketua_tim();
            redirect('ketua_tim');
        }else{
            $data['title'] = 'MOTERETILA | Tambah Data Ketua Tim';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('ketua tim/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id) {
        $this->load->model('ketua_tim_model');
        $this->ketua_tim_model->hapus_ketua_tim($id);
        redirect('ketua_tim');
    }

    public function ubah($id)
    {
        $this->load->model('ketua_tim_model');
        if (isset($_POST['simpan'])) {
            $this->ketua_tim_model->ubah_ketua_tim($id);
            redirect('ketua_tim');
        } else {
            $data['ketua_tim'] = $this->ketua_tim_model->get_ketua_tim_byid($id);
            $data['title'] = 'MOTERETILA | Ubah Data Ketua Tim';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('ketua tim/ubah', $data);
            $this->load->view('template/footer');
        }
    }
}
