<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_M');
    }
    public function index()
    {
        $this->load->view('loginpage');
    }

    public function daftar_view()
    {
        $this->load->view('registerpage');
    }
	public function cek_login(){
        $data = $this->input->post(null,TRUE);
        $login= $this->Akun_M->login_akun($data);
        if($login){
            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login->username,
                'level' => "Customer"
            );
			//isi dengan session data , terus di set sessionnya
            $this->session->set_userdata($sess_data);
            redirect('home/index');
        }else{
            //isi dengan flash data disini untuk memberi tau alert ke View
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('Login/index');

        }

    }
}
