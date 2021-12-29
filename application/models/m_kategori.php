<?php  

class M_kategori extends CI_Model{
	//buah sayur
	public function data_makanan(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Makanan']);
	}
	public function data_minuman(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Minuman']);
	}
	public function data_spesial(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Menu Spesial']);
	}

	public function data_elektronik(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Elektronik']);
	}

	public function data_pakaian_pria(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Pakaian Pria']);
	}

	public function data_pakaian_wanita(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Pakaian Wanita']);
	}

	public function data_pakaian_anak_anak(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Pakaian Anak - anak']);
	}

	public function data_peralatan_olahraga(){
		return $this->db->get_where("tb_barang", ['kategori' => 'Peralatan Olahraga']);
	}

	public function session_user(){
		return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
	}
}

?>