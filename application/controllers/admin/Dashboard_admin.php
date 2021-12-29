<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {
	public function index(){
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}
		
		$data['title'] = 'Dashboard Admin';
		$data['user'] = $this->model_barang->tampil_user();

		$this->load->view('admin_templates/header', $data);
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin_templates/topbar', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin_templates/footer');
	}

}
