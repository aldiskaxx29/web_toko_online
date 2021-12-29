<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

	public function makanan(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'Makanan';
		$data['makanan'] = $this->m_kategori->data_makanan()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('makanan', $data);
		$this->load->view('templates/footer');

	}

	public function minuman(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'Minuman';
		$data['minuman'] = $this->m_kategori->data_minuman()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('minuman', $data);
		$this->load->view('templates/footer');

	}

	public function spesial(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'Spesial';
		$data['spesial'] = $this->m_kategori->data_spesial()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('spesial', $data);
		$this->load->view('templates/footer');

	}

	public function elektronik(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'Elektronik';
		$data['elektronik'] = $this->m_kategori->data_elektronik()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('elektronik', $data);
		$this->load->view('templates/footer');

	}

	public function pakaian_pria(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'pakaian_pria';
		$data['pakaian_pria'] = $this->m_kategori->data_pakaian_pria()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('pakaian_pria', $data);
		$this->load->view('templates/footer');

	}

	public function pakaian_wanita(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'pakaian_wanita';
		$data['pakaian_wanita'] = $this->m_kategori->data_pakaian_wanita()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('pakaian_wanita', $data);
		$this->load->view('templates/footer');

	}
	public function pakaian_anak_anak(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }

		$data['title'] = 'pakaian_anak_anak';
		$data['pakaian_anak_anak'] = $this->m_kategori->data_pakaian_anak_anak()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('pakaian_anak_anak', $data);
		$this->load->view('templates/footer');

	}

	public function peralatan_olahraga(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }
		
		$data['title'] = 'peralatan_olahraga';
		$data['peralatan_olahraga'] = $this->m_kategori->data_peralatan_olahraga()->result_array();
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('peralatan_olahraga', $data);
		$this->load->view('templates/footer');

	}

}

?>