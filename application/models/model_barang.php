<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model{

	public function tampil_user(){
		return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
	}
	
	public function tampil_users($table){
		return $this->db->get($table)->result();
	}

	public function tampil_data(){
		return $this->db->get('tb_barang');
	}

	public function tambah_barang($table,$data){
		$this->db->insert('tb_barang', $data);
	}

	public function hapus_barang($table,$where){
		$this->db->where($where);
		$this->db->delete('tb_barang');
	}

	public function find($id){
		$result = $this->db->where('id_barang', $id)
						   ->limit(1)
						   ->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		}
		else{
			return array();
		}
	}

	public function detail_barang($id_barang){
		$result = $this->db->where('id_barang',$id_barang)->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->result();
		}
		else{
			return false;
		}
	}

	public function update_profil($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}