<?php
	class Predict_M extends CI_Model{

        // fungsi untuk mendapatkan 4 barang teratas yang memiliki rating terbesar
        public function get_data($data){
            
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('predictrating', 'barang.idbarang = predictrating.idbarang');
            $this->db->where('predictrating.idakun',$data);
            $this->db->order_by('predict','DESC');
            $this->db->limit(4);
            $query = $this->db->get();
            return $query->result();
        }

        // fungsi untuk memasukan data predict ke DB
		public function daftar_predict($data){
			$param = array(
				"idbarang"=>$data['idbarang'],
                "idakun"=>$data['idakun'],
                "predict"=>$data['predict']
            );
            $this->db->where('idbarang',$data['idbarang']);
            $this->db->where('idakun',$data['idakun']);
            $query = $this->db->get('predictrating');
            if($query->num_rows()==0){
                $insert = $this->db->insert('predictrating', $param);
                if ($insert){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                $this->db->where('idbarang',$data['idbarang']);
                $this->db->where('idakun',$data['idakun']);
                $update = $this->db->update('predictrating', $param);
                if ($update){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }

            
		}
		
}