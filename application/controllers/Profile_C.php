<?php
class Profile_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Profile_M');
    }
	public function index(){
		$data = $this->session->userdata('username');
        $profile = $this->Profile_M->profile($data);
        $order = $this->Profile_M->order($data);
        if($profile){
            $this->session->set_flashdata('data', 'ada');
            $data1 = array(
            	'profile1' => $profile,
                'order'=>$order
            );	   
    	}
    	else{
    		 $this->session->set_flashdata('data', 'tidak');
             $data1 = array(
                'order'=>$order
            );  
    	}
        $this->load->view('header');
        $this->load->view('profilepage',$data1);
        $this->load->view('footer');
	}

	public function data_user(){
        $data = $this->input->post(null,TRUE);
        $insert = $this->Profile_M->user($data);
        if($insert){
            redirect('Profile_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
        }

    }
}