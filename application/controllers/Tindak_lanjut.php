<?php

class Tindak_lanjut extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tindak_lanjut_model');
        $this->load->model('unit_model');
        $this->load->model('pic_model');
        $this->load->model('auditor_model');
        $this->load->model('ketua_tim_model');
    }


    public function index()
    {
        $this->load->model('tindak_lanjut_model');
        $data['tindak_lanjut'] = $this->tindak_lanjut_model->get_tindak_lanjut();
        $data['title'] = 'MOTERETILA | Unit';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('tindak lanjut/tindak_lanjut', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
		
        $this->load->model('tindak_lanjut_model');
        if ($this->input->post('simpan')) {
				$this->unit_model->all_data()();
				$this->pic_model->all_data()();
				$this->auditor_model->all_data()();
				$this->ketua_tim_model->all_data()();
				$this->tindak_lanjut_model->tambah_tindak_lanjut();
				redirect('tindak_lanjut');
        } else {
            $data['title'] = 'MOTERETILA | Tambah Tindak Lanjut';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('tindak lanjut/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id)
    {
        $this->load->model('tindak_lanjut_model');
        $this->tindak_lanjut_model->hapus_tindak_lanjut($id);
        redirect('tindak_lanjut');
    }

    public function ubah($id)
    {
        $this->load->model('tindak_lanjut_model');
        if ($this->input->post('simpan')) {
            $this->tindak_lanjut_model->ubah_tindak_lanjut($id);
            redirect('tindak_lanjut');
        } else {
            $data['tindak_lanjut'] = $this->tindak_lanjut_model->get_tindak_lanjut_byid($id);
            $data['title'] = 'MOTERETILA | Ubah Tindak Lanjut';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('tindak lanjut/ubah', $data);
            $this->load->view('template/footer');
        }
    }
}
