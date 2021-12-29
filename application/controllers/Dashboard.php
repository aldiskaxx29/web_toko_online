<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {
	public function index(){
		// if (!$this->session->userdata('email')) {
		// 	redirect('auth');
		// }
		
		$data['title'] = 'Dashboard';
		$data['user'] = $this->model_barang->tampil_user();
		$data['barang'] = $this->model_barang->tampil_data()->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('Dashboard/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id){
		$barang = $this->model_barang->find($id);

		$data = array(
        'id'      => $barang->id_barang,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_barang
		);

		$this->cart->insert($data);
		redirect('dashboard');
	}

	public function detail_keranjang(){

		// if (empty($this->session->flashdata('keranjang'))) {
		// 	// echo "<script>
		// 	// 	alert('Silahkan Belanja');

		// 	// 	</script>";

		// 	redirect('dashboard/index');
		// }
		$data['user'] = $this->model_barang->tampil_user();
		$data['title'] ='Halaman keranjang';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('keranjang');
		$this->load->view('templates/footer');

	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran(){
		$data['user'] = $this->model_barang->tampil_user();
		$data['title'] ='Halaman Pembayaran';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan(){
		$data['user'] = $this->model_barang->tampil_user();
		$data['title'] ='Halaman Proses Pesanan';
		$is_proses = $this->m_invoice->index();
		if ($is_proses) {
			$this->cart->destroy();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		}
		else{
			echo "Pesanan anda gagal di prosess";
		}
	}

	public function detail($id_barang){
		$data['title'] = 'Detail Barang';
		$data['user'] = $this->model_barang->tampil_user();
		$data['barang'] = $this->model_barang->detail_barang($id_barang);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('detail_barang', $data);
			$this->load->view('templates/footer');		
	}

}