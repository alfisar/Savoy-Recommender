<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Desc_M extends CI_Model
{
    public function get_product($id)
	{
        global $idpro;
        if($id < 10){
            $idpro = "pr-00".$idpro;
        }
        else{
            $idpro = "pr-0".$idpro;
        }
        
        $this->db->select('*');
        $this->db->where('idbarang', $idpro);
        $query = $this->db->get('barang');
		return $query->result();
	}
}
?>