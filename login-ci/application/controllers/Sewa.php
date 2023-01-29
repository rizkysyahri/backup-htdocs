<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sewa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('SewaModel'); // Load SewaModel ke controller ini
	}
	
	public function index(){
		$data['sewa'] = $this->SewaModel->view();
		$this->load->view('sewa/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->SewaModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->SewaModel->save(); // Panggil fungsi save() yang ada di SewaModel.php
				redirect('sewa');
			}
		}
		
		$this->load->view('sewa/form_tambah');
	}
	
	public function ubah($id){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->SewaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->SewaModel->edit($id); // Panggil fungsi edit() yang ada di SewaModel.php
				redirect('sewa');
			}
		}
		
		$data['sewa'] = $this->SewaModel->view_by($id);
		$this->load->view('sewa/form_ubah', $data);
	}
	
	public function hapus($id){
		$this->SewaModel->delete($id); // Panggil fungsi delete() yang ada di SewaModel.php
		redirect('sewa');
	}
}
