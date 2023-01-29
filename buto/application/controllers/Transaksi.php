<?php
class Transaksi extends CI_Controller
{
 	public function index()

 	{

 		$this->load->view('view-form-transaksi');
 	}


 	public function cetak()
 	{
 		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[5]', ['required' => 'Isi Data Terlebih Dahulu', 'min_length' => 'Nama terlalu pendek']);

 		$this->form_validation->set_rules('nama', 'Nomor Handphone', 'required|min_length[5]', ['required' => 'Isi Data Terlebih Dahulu', 'min_length' => 'Nama terlalu pendek']);

 		if ($this->form_validation->run() != true) 

 		{
 			$this->load->view('view-form-transaksi');
 		
 		} 
 		else 
		{
			$data = [
 				'nm_pembeli' 	=> $this->input->post('nama'),
 				'no_hp' 		=> $this->input->post('no'),
 				'merk_sepatu' 	=> $this->input->post('merk'),
 				'ukuran_spt'	=> $this->input->post('ukuran')
 				];
 		$this->load->view('view-data-transaksi', $data);
 		}
 	}

}