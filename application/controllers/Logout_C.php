<?php
class Logout_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		// $this->session->sess_destroy();
        $this->session->unset_userdata('username');
        redirect('Landing_C/index');
	}
}