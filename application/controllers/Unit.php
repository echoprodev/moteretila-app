<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

class Unit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('unit_model');
    }

    public function index()
    {
        $data['unit'] = $this->unit_model->get_unit();
        $data['title'] = 'MOTERETILA | Unit';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('unit/unit', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->model('unit_model');
        if(isset($_POST['simpan'])){
            $nama_unit = $this->input->post('nama_unit');
            if ($this->unit_model->cek_duplikat_unit($nama_unit)) {
                // Jika data sudah ada, tampilkan pesan kesalahan
                $this->session->set_flashdata('error', 'Nama unit sudah ada. Silakan gunakan nama unit yang lain.');
            } else {
                // Jika data belum ada, simpan ke database
                $this->unit_model->simpan_data_unit($nama_unit);

                // Tampilkan pesan sukses
                $this->session->set_flashdata('success', 'Data unit berhasil disimpan.');
            }
            $this->unit_model->tambah_unit();

            redirect('unit');
        }else{
            $data['title'] = 'MOTERETILA | Tambah Data Unit';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('unit/tambah');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id)
    {
        $this->unit_model->hapus_unit($id);
        redirect('unit');
    }

    public function ubah($id)
    {
        if ($this->input->post('simpan')) {
            // Validasi input
            $this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');

            if ($this->form_validation->run()) {
                $this->unit_model->ubah_unit($id);
                redirect('unit');
            }
        }

        $data['unit'] = $this->unit_model->get_unit_byid($id);
        $data['title'] = 'MOTERETILA | Ubah Data Unit';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('unit/ubah', $data);
        $this->load->view('template/footer');
    }

    public function import() {
        // Ambil file Excel dari formulir
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size']      = 1024;
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('excel_file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('excelimport/index');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $inputFileName = './uploads/' . $data['upload_data']['file_name'];
    
            // Load PhpSpreadsheet library
            $spreadsheet = IOFactory::load($inputFileName);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    
            // Proses data dan simpan ke database
            foreach ($sheetData as $row) {
                $data = array(
                    'no' => $row['A'],
                    'nama_unit' => $row['B'],
                    
                );

    
                $this->db->insert('tb_unit', $data);
            }
    
            // Hapus file Excel yang diupload
            unlink($inputFileName);
    
            $this->session->set_flashdata('success', 'Data berhasil diimpor ke database.');
            redirect('excelimport/index');
        }
    }
    
}
