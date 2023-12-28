<?php

class Laporan_tindak_lanjut extends CI_Controller
{

    public function index()
    {
        $data['title'] = "MOTERETILA | Laporan Tindak Lanjut";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporan_tindak_lanjut', $data);
        $this->load->view('template/footer', $data);
    }

    public function laporan_pertanggal()
    {
        $data['title'] = 'MOTERETILA | Laporan Pertanggal';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporan_pertanggal', $data);
        $this->load->view('template/footer', $data);
    }

    public function laporan_perbulan()
    {
        $this->load->model('laporan_tindak_lanjut_model');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $tindak_lanjut = $this->laporan_tindak_lanjut_model->get_perbulan($bulan, $tahun);
        $data['tindak_lanjut'] = $tindak_lanjut;
        $data['title'] = 'MOTERETILA | Laporan Perbulan';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporan_perbulan', $data);
        $this->load->view('template/footer', $data);
    }

    public function laporan_pertahun()
    {
        $data['title'] = 'MOTERETILA | Laporan Pertahun';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporan_pertahun', $data);
        $this->load->view('template/footer', $data);
    }
}
