<?php
	class Billing_M extends CI_Model{
		public function pesan($data){
			$param = array(
				"user" => $this->session->userdata('username'),
				"first"=>$data['fname'],
				"last"=>$data['lname'],
				"email"=>$data['email'],
				"province"=>$data['province'],
				"city"=>$data['city'],
				"district"=>$data['district'],
				"address"=>$data['address'],
				"zipcode"=>$data['zip'],
				"phone"=>$data['phone'],
				"namabarang"=>$data['barang'],
				"harga"=>$data['total']
			);
				$insert = $this->db->insert('billing', $param);
				if ($insert){
					return TRUE;
				}else{
					return FALSE;
				}
			}	
}
