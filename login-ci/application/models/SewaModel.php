<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SewaModel extends CI_Model {
	// Fungsi untuk menampilkan semua data sewa
	public function view(){
		return $this->db->get('sewa')->result();
	}
	
	// Fungsi untuk menampilkan data sewa berdasarkan id nya
	public function view_by($id){
		$this->db->where('id', $id);
		return $this->db->get('sewa')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, id tidak harus divalidasi
		// Jadi id di validasi hanya ketika menambah data sewa saja
		if($mode == "save")
			$this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_telp', 'Telp', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
		
		
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel sewa
	public function save(){
		$data = array(
			"id" => $this->input->post('input_id'),
			"nama" => $this->input->post('input_nama'),
			"telp" => $this->input->post('input_telp'),
			"alamat" => $this->input->post('input_alamat')
			
		);
		
		$this->db->insert('sewa', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data sewa berdasarkan id sewa
	public function edit($id){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"telp" => $this->input->post('input_telp'),
			"alamat" => $this->input->post('input_alamat')
					);
		
		$this->db->where('id', $id);
		$this->db->update('sewa', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data sewa berdasarkan id sewa
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('sewa'); // Untuk mengeksekusi perintah delete data
	}
}
