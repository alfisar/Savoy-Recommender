<?php
	class Profile_M extends CI_Model{
		public function profile($data){
			$this->db->where('user',$data);
			$result = $this->db->get('profile');
			if($result->num_rows()==1){
				return $result->row(0);
			}else{
				return false;
			}
		}
		public function user($data){
			$param = array(
				"user" => $this->session->userdata('username'),
				"fname"=>$data['first'],
				"lname"=>$data['last'],
				"email"=>$data['email'],
				"province"=>$data['province'],
				"city"=>$data['city'],
				"district"=>$data['district'],
				"address"=>$data['address'],
				"zip"=>$data['zip'],
				"phone"=>$data['phone']
			);
				$insert = $this->db->insert('profile', $param);
				if ($insert){
					return TRUE;
				}else{
					return FALSE;
				}
			}
		public function order($data){
			$this->db->where('user',$data);
			$query = $this->db->get('billing');
			return $query->result();
		}	
}
