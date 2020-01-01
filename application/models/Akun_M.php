<?php
	class Akun_M extends CI_Model{
		public function get_data(){
			$this->db->where('idakun !=', $this->session->userdata('idakun') );
			$query = $this->db->get('akun');
			return $query->result();
		}
		public function daftar_akun($data){
			$param = array(
				"email"=>$data['email'],
				"pass"=>$data['pass1']
			);
			if ($data['pass1'] == $data['pass2']) {
				$insert = $this->db->insert('akun', $param);
				if ($insert){
					return TRUE;
				}else{
					return FALSE;
				}
			}
			else{
				$this->session->set_flashdata('alert', 'sukses_daftar');
           			 //isi dengan flash data disini
            	redirect('Login_C/index');
			}
		}
		public function login_akun($data){
			$this->db->where('email',$data['email']);
			$this->db->where('pass',$data['password']);

			$result = $this->db->get('akun');
			if($result->num_rows()==1){
				return $result->row(0);
			}else{
				return false;
			}
		}
}
