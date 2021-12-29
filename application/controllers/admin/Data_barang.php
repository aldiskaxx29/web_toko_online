<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller{
	public function index(){
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}
		
		$data['title'] = 'Data Barang';
		$data['barang'] = $this->model_barang->tampil_data()->result_array();
		$data['user'] = $this->model_barang->tampil_user();

		$this->load->view('admin_templates/header', $data);
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin_templates/topbar', $data);
		$this->load->view('admin/data_barang', $data);
		$this->load->view('admin_templates/footer');
	}

	public function tambah_data(){
		$data['user'] = $this->model_barang->tampil_user();
		$data['title'] = 'Tambah Data Barang';
		$data['kategori'] = ['Makanan','Minuman','Menu Spesial'];


		$this->form_validation->set_rules('nama','Nama Barang','required|trim');
		$this->form_validation->set_rules('keterangan','Keterangan','required|trim');
		$this->form_validation->set_rules('kategori','Kategori','required|trim');
		$this->form_validation->set_rules('harga','Harga','required|trim');
		$this->form_validation->set_rules('stok','Stok','required|trim');
		
		if ($this->form_validation->run() == FALSE){
		$this->load->view('admin_templates/header', $data);
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin_templates/topbar', $data);
		$this->load->view('admin/tambah', $data);
		$this->load->view('admin_templates/footer');
		}
		else{
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$kategori = $this->input->post('kategori');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');
			$upload_image = $_FILES['foto']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/barang/';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					echo "Upload Gagal";die;

				}
				else{
					$image = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_barang' => $nama,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'harga' => $harga,
				'stok' => $stok,
				'gambar' => $image
			);

			// $this->db->insert('tb_barang', $data);
			$this->model_barang->tambah_barang('tb_barang',$data);
			$this->session->set_flashdata('admin','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Tambahkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/data_barang');
		}
	}

	public function ubah($id){
		$data['user'] = $this->model_barang->tampil_user();
		$where = ['id_barang' => $id];
		$data['title'] = 'Halaman Ubah Data';
		$data['barang'] = $this->db->get_where('tb_barang', $where)->row_array();

		$this->form_validation->set_rules('nama','Nama','required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin_templates/header', $data);
			$this->load->view('admin_templates/sidebar');
			$this->load->view('admin_templates/topbar', $data);
			$this->load->view('admin/ubah_barang', $data);
			$this->load->view('admin_templates/footer');			
		}
		else{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$kategori = $this->input->post('kategori');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');

			$image = $_FILES['foto']['name'];

			if ($image) {
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/barang';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto')) {
					$img_lama = $data['barang']['gambar'];
					if ($img_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/img/barang' .$img_lama);
					}

					$gambar_new = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar_new);
				}
				else{
					echo $this->upload->dispay_errors();
				}
			}

			$data = array(
				'nama_barang' => $nama,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'harga' => $harga,
				'stok' => $stok
				// 'gambar' => $gambar_new
			);

			$this->db->where('id_barang', $id);
			$this->db->update('tb_barang', $data);
			$this->session->set_flashdata('admin','<div class="alert alert-info alert-dismissible fade show" role="alert">Data Berhasil di Ubah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/data_barang');			
		}

	}

	public function hapus($id){
		$where = ['id_barang' => $id];
		$data['barang'] = $this->db->get_where('tb_barang', $where)->row_array();
		$apus_img = $data['barang']['gambar'];
		// var_dump($apus_img);die;
		unlink(FCPATH . 'assets/img/barang/' . $apus_img);
		$this->model_barang->hapus_barang('tb_barang',$where);
		$this->session->set_flashdata('admin','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Hapus
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/data_barang');
	}

	public function detail($id){
		$data['title'] = 'Halaman Detail';
		$where = ['id_barang' => $id];
		$data['user'] = 
		$data['barang'] = $this->db->get_where('tb_barang', $where)->result();
		$data['user'] = $this->model_barang->tampil_user();

		$this->load->view('admin_templates/header', $data);
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin_templates/topbar', $data);
		$this->load->view('admin/detail_barang', $data);
		$this->load->view('admin_templates/footer');

	}

} 