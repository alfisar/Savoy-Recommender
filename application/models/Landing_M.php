<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Landing_M extends CI_Model
{

	public function get_data()
	{
		$query = $this->db->get('barang');
		return $query->result();
	}

}

?>