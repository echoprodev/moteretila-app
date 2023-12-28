<?php 

class Auditor extends CI_Controller{

    public function index() {
        $this->load->model('auditor_model');
        $data['auditor'] = $this->auditor_model->get_auditor();
        $data['title'] = 'MOTERETILA | Auditor';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('auditor/auditor', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->model('auditor_model');
        if(isset($_POST['simpan'])){
            $this->auditor_model->tambah_auditor();
            redirect('auditor');
        }else{
            $data['title'] = 'MOTERETILA | Tambah Data Auditor';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('auditor/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id) {
        $this->load->model('auditor_model');
        $this->auditor_model->hapus_auditor($id);
        redirect('auditor');
    }

    public function ubah($id)
    {
        $this->load->model('auditor_model');
        if (isset($_POST['simpan'])) {
            $this->auditor_model->ubah_auditor($id);
            redirect('auditor');
        } else {
            $data['auditor'] = $this->auditor_model->get_auditor_byid($id);
            $data['title'] = 'MOTERETILA | Ubah Data Auditor';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('auditor/ubah', $data);
            $this->load->view('template/footer');
        }
    }
}
