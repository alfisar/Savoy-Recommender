<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Barang_M extends CI_Model{
	public function get_data(){
		$query = $this->db->get('barang');
		return $query->result();
	}
	public function get_barang($data){
		$this->db->where('idbarang',$data);
		$barang = $this->db->get('barang');
		if($barang->num_rows()==1){
			return $barang->row(0);
		}else{
			return False;
		}
	}

}
?>
