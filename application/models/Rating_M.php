<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Rating_M extends CI_Model{
    public function insert_data($data){
        $param = array(
            'idbarang' => $this->session->userdata('comment'),
            'idakun' => $this->session->userdata('idakun'),
            'rating' => $data['rate']
        );
        $insert = $this->db->insert('rating', $param);
        if($insert){
            $this->db->where('idbarang', $this->session->userdata('comment'));
            $this->db->where('idakun', $this->session->userdata('idakun'));
            $delete = $this->db->delete('predictrating');
            if ($delete){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
    
    public function cek(){
        $this->db->where('idbarang',$this->session->userdata('comment'));
        $this->db->where('idakun',$this->session->userdata('idakun'));
        $query = $this->db->get('rating');
        if($query->num_rows()==0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
?>