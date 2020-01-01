<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Similarity_M extends CI_Model{

	// mendaptkan data semua rating dari db dengan mengurutkan dari terkecil
	public function get_data(){
		$this->db->order_by('idakun','ASC');
		$query = $this->db->get('rating');
		
		return $query->result();
	}

	// mendaptkan data rating yang sudah dilakukan user trsebut
	public function get_user($data){
		$this->db->where('idakun',$data);
		$query = $this->db->get('rating');
		if ($query->num_rows()!=0){
			return $query->result();
		}else{
			return False;
		}
		
		
	}

	// mendapatkan data rating dari pencarian barang yang sudah dirating oleh user lain
	public function get_userr($data){
		$this->db->select('rating as hasil' );
		$this->db->where('idbarang',$data['idbarang']);
		$this->db->where('idakun',$data['akun']);
		$query = $this->db->get('rating');
		if($query->num_rows()==1){
			return $query->row(0);
		}else{
			return false;
		}
		// return $query->result();
	}

	// pengecekan apakah user tersebut sudah merating barang tersebut
	public function get_user_not($data){
		$this->db->select('rating as hasil' );
		$this->db->where('idbarang',$data['idbarang']);
		$this->db->where('idakun',$data['akun']);
		$query = $this->db->get('rating');
		if($query->num_rows()==0){
			return true;
		}else{
			return false;
		}
		// return $query->result();
	}

}
?>
