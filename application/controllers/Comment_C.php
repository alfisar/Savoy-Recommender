<?php
class Comment_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_M');
        $this->load->model('Comment_M');
		$this->load->helper('url');
    }
    public function index(){
        echo $this->session->userdata('comment');
        $idproduk1 = $this->session->userdata('comment');
		$barang = $this->Barang_M->get_barang($idproduk1);
        $cmt = $this->Comment_M->cmt( $idproduk1 );
		$data = array(
            'barang'=>$barang,
            'comment'=>$cmt
            );
        $this->load->view('header');
		$this->load->view('commentpage',$data);
        $this->load->view('footer');
    }
    public function ratting(){
        $idproduk1 = $this->session->userdata('comment');
		$barang = $this->Barang_M->get_barang($idproduk1);
        $cmt = $this->Comment_M->cmt( $idproduk1 );
		$data = array(
            'barang'=>$barang,
            'comment'=>$cmt
            );
        $this->load->view('header');
		$this->load->view('ratingg',$data);
        $this->load->view('footer');
    }
    public function comment(){
        if ($this->session->userdata('username')!==null) {
            $data = $this->input->post(null,TRUE);
            $insert = $this->Comment_M->comment($data);
            redirect('Comment_C/index');
        }
        else{
            redirect('Login_C/index');
        }
    }
    public function del_cmt(){
        $delete = $this->Comment_M->del_cmt($this->input->get('comment1', TRUE));
        if($delete){
          redirect('Comment_C/index');  
        }
//        
        
    }

}
