<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Anggota Penyewa Lapangan',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID',1,0);
        $pdf->Cell(65,6,'NAMA',1,0);
        $pdf->Cell(27,6,'TELP',1,0);
        $pdf->Cell(75,6,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',10);
        $data = $this->db->get('sewa')->result();
        foreach ($data as $row){
            $pdf->Cell(30,6,$row->id,1,0);
            $pdf->Cell(65,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->telp,1,0);
            $pdf->Cell(75,6,$row->alamat,1,1); 
        }
        $pdf->Output();
    }
}