<?php
class Register_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Akun_M');
        $this->load->helper('form');
    }    
    public function index(){
        $this->load->view('header');
        $this->load->view('registerpage');
        $this->load->view('footer');
    }
    public function daftar_akun(){
        $data = $this->input->post(null,TRUE);
        $insert = $this->Akun_M->daftar_akun($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            //isi dengan flash data disini
            redirect('Login_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
        }

    }
}
