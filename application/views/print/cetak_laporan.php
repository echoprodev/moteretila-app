<!-- application/views/cetak_laporan_tcpdf.php -->
<?php
require_once APPPATH . 'libraries/tcpdf/tcpdf.php';

// Extend TCPDF
class MYPDF extends TCPDF {
    public function Header() {
        // Custom header content, jika diperlukan
    }

    public function Footer() {
        // Custom footer content, jika diperlukan
    }
}

// Create PDF instance
$pdf = new MYPDF();

// Set document properties
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Cetak Laporan');
$pdf->SetSubject('Laporan PDF');
$pdf->SetKeywords('TCPDF, PDF, CodeIgniter, Laporan');

// Add a page
$pdf->AddPage();

// Content
$pdf->writeHTML($this->load->view('cetak_laporan_content', $data, true));

// Close and output PDF
$pdf->Output();
