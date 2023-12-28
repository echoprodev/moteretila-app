<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Import_excel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('import_model'); // Buatlah model untuk penyimpanan ke database
    }

    public function index()
    {
        $this->load->view('unit/unit');
    }

    public function process()
    {
        // Memeriksa apakah file telah diunggah
        if (!empty($_FILES['excel']['name'])) {
            $config['upload_path']      = './uploads/';
            $config['allowed_types']    = 'xls|xlsx';
            $config['max_size']         = 2048; // 2MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('excel')) {
                $uploadData = $this->upload->data();
                $inputFileName = $uploadData['full_path'];

                // Proses data sheet dan simpan ke database
                $this->importDataToDatabase($inputFileName);

                // Set pesan sukses
                $this->session->set_flashdata('success', 'Import Excel berhasil.');
            } else {
                // Set pesan kesalahan upload
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat mengunggah file: ' . $this->upload->display_errors());
            }
        } else {
            // Set pesan kesalahan jika file tidak diunggah
            $this->session->set_flashdata('error', 'Pilih file Excel terlebih dahulu.');
        }

        // Alihkan kembali ke halaman import
        redirect('Import_excel');
    }

    private function importDataToDatabase($inputFileName)
    {
        // Load library PHPExcel atau fungsi-fungsi PHP bawaan untuk membaca file Excel

        // Contoh menggunakan fungsi-fungsi PHP bawaan
        $excelData = $this->readExcelFile($inputFileName);

        // Simpan data ke database (gunakan model)
        $this->import_model->saveDataToDatabase($excelData);
    }

    private function readExcelFile($inputFileName)
    {
        // Implementasikan logika membaca file Excel di sini
        // Anda dapat menggunakan fungsi-fungsi bawaan PHP, misalnya dengan fungsi `fgetcsv` untuk CSV atau `PHPExcel` (jika Anda ingin menggunakan PHPExcel)
        // Anda juga dapat mencoba menggunakan fungsi-fungsi dari library PHPExcelReader: https://github.com/nuovo/spreadsheet-reader

        // Contoh pembacaan file CSV sederhana
        $excelData = [];
        $file = fopen($inputFileName, 'r');

        while (($row = fgetcsv($file, 1000, ',')) !== false) {
            $excelData[] = $row;
        }

        fclose($file);

        return $excelData;
    }
}
