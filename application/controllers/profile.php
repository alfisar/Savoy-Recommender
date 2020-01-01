<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Akun_M');
    }
	public function index(){
        $this->load->view('profilpage');
    }
}
