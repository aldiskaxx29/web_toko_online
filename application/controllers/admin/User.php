<?php 

/**
 * 
 */
class User extends CI_Controller
{

	public function index(){
		$data['user'] = $this->model_barang->tampil_user();
		$data['title'] = 'Data User';
		$data['users'] = $this->model_barang->tampil_users('tb_user');
		$this->load->view('admin_templates/header', $data);
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin_templates/topbar', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('admin_templates/footer');
	}
}