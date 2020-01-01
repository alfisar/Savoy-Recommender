<?php
class Rating_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Rating_M');
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
    }
    public function index(){
        $sess_data = array(
            'logged_in' => "Sudah Login",
            'comment' => $this->input->get('idproduk', TRUE),
            'level' => "Customer"
        );
        $data = $this->input->post(null,TRUE);
        $query = $this->Rating_M->insert_data($data);
        if ($query){
            redirect('Landing_C/index');
        }

    }


}
