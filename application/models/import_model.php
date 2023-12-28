<?php
defined('BASEPATH') or exit('No direct script access allowed');

class import_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function saveDataToDatabase($excelData)
    {
        // Implementasikan logika penyimpanan ke database di sini
        // Misalnya, jika data Excel memiliki format tertentu, Anda dapat mengambil nilai-nilai yang sesuai dan menyimpannya ke tabel database

        // Contoh: menyimpan data ke tabel 'import_data'
        foreach ($excelData as $row) {
            $data = array(
                'column1' => $row[0],
                'column2' => $row[1],
                // ... sesuaikan dengan struktur tabel Anda
            );

            $this->db->insert('tb_unit', $data);
        }
    }
}
