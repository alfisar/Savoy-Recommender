<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Comment_M extends CI_Model{
    public function cmt($data){
        $this->db->where('idproduk',$data);
        $query = $this->db->get('comment');
        return $query->result();
    }	
    public function comment($data){

        $param = array(
            "idproduk" => $this->session->userdata('comment'),
            "user" => $this->session->userdata('username'),
            "comment" => $data['cmtUser']
        );
        $insert = $this->db->insert('comment', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }	

    public function del_cmt($data){
        $param = array(
            "idproduk" => $this->session->userdata('comment'),
            "user" => $this->session->userdata('username'),
            "comment" => $data
        );
        $insert = $this->db->delete('comment', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>