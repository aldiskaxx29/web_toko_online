<?php  

class M_auth extends CI_Model{

	public function insert($data,$table){
		$this->db->insert($table,$data);
	}
}

?>