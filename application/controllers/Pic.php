<?php 

class Pic extends CI_Controller{

    public function index() {
        $this->load->model('pic_model');
        $data['pic'] = $this->pic_model->get_pic();
        $data['title'] = 'MOTERETILA | PIC';
        $data['records'] = $this->pic_model->get_all_records();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pic/pic', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->model('pic_model');
        if(isset($_POST['simpan'])){
            $this->pic_model->tambah_pic();
            redirect('pic');
        }else{
            $data['title'] = 'MOTERETILA | Tambah Data PIC';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pic/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id) {
        $this->load->model('pic_model');
        $this->pic_model->hapus_pic($id);
        redirect('pic');
    }

    public function ubah($id)
    {
        $this->load->model('pic_model');
        if (isset($_POST['simpan'])) {
            $this->pic_model->ubah_pic($id);
            redirect('pic');
        } else {
            $data['pic'] = $this->pic_model->get_pic_byid($id);
            $data['title'] = 'MOTERETILA | Ubah Data PIC';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pic/ubah', $data);
            $this->load->view('template/footer');
        }
    }

    public function trash($id) {
        $this->pic_model->trash_record($id);
        redirect('Pic/index');
    }

    public function restore($id) {
        $this->pic_model->restore_record($id);
        redirect('Pic/index');
    }
}
