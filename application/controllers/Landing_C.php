<?php
class Landing_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('Barang_M');
            $this->load->model('Similarity_M');
            $this->load->model('Akun_M');
            $this->load->model('Predict_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->library('javascript/jquery');
    }    
    public function index(){

        // mendapatkan semua data rating dengan diurutkan dari yang terkecil
        $sim = $this->Similarity_M->get_data();
        // mendapatkan semua data yang sudah dirating oleh user tersebut 
        $user = $this->Similarity_M->get_user($this->session->userdata('idakun'));
        // mendaptkan data akun selain akun yang sedang ingin deiberikan recommend
        $akun = $this->Akun_M->get_data();
        //  Mendapatkan data semua barang
        $allbarang = $this->Barang_M->get_data();
        
        //inisialisasi data1 dan data2 
        $data2['hore'] = 0;
        $data1['coba'] = 0;
        $data1['coba2'] = 0;
        

        // pengecekan apakah user sudah pernah merating atau belum
        if ($user){

            // perulangan sebanyak akun yang di dapat
            foreach ($akun as $ak){
                $data[$ak->idakun] = 0;
                
    
                // perulangan sebanyak barang yang sudah dirating user tersebut
                foreach ($user as $us){
    
                    // membentuk array untuk digunakan pada saat pencarian data di database yang berisi idbarang dari user yang ingin dikasih rating dan idakun selain akun tersebut
                    $temp = array(
                        'idbarang' => $us->idbarang,
                        'akun' => $ak->idakun
                    );
    
                    // proses mendapatkan rating dari akunlain yang sudah merating barang tersebut
                    $tempp = $this->Similarity_M->get_userr($temp);
                    // jika rating didapatkan maka
                    if($tempp){
                        
                        // proses perkalian antara rating yang diberikan user lain dengan rating yang diberikan oleh user tesebut
                        $data[$ak->idakun] = $data[$ak->idakun] + $us->rating * $tempp->hasil;
                        // proses mendatpakan kuadrat dari inputan rating barang tersebut dari user tersebut
                        $data1['coba'] = $data1['coba'] + $us->rating * $us->rating;
                        // proses kuadrat dari pemberian rating ke barang tersebut dari user lain
                        $data1['coba2'] = $data1['coba2'] + $tempp->hasil * $tempp->hasil;
                       
                    }
                }
                
                // pengecekan apakah user tersebut memiliki kemiripan dengan user lain
                if ($data[$ak->idakun] != 0){
                    // proses mendaptkan similarity
                    $data[$ak->idakun] = $data[$ak->idakun] / (sqrt($data1['coba'])*sqrt($data1['coba2']));
                }
                
               
                // proses penambahan semua similarity
                $data2['hore'] = $data2['hore'] +  $data[$ak->idakun];
            }

            // pengecekan apakah ada similarity terhadap user tersebut
            if ($data2['hore'] != 0){
                // perulangan untuk mendapatkan predict rating untuk barang
                foreach ($allbarang as $allbar){
        
                    $temp = array(
                        'idbarang' => $allbar->idbarang,
                        'akun' => $this->session->userdata('idakun')
                    );
                    
                    // pengecekan apakah barang sudah p[ernah dirating atau belum oleh user tersebut
                    $tempp = $this->Similarity_M->get_user_not($temp);
                    if($tempp){
                        
                        $data3[$allbar->idbarang] = 0;
                        foreach ($akun as $ak){
                            $temp = array(
                                'idbarang' => $allbar->idbarang,
                                'akun' => $ak->idakun
                            );
        
                            // mendapatkan data rating dari similarity akun lain dengan akun tersebut
                            $tempp = $this->Similarity_M->get_userr($temp);
                            // echo  $data[$ak->idakun];
                            if(($tempp) && ( !empty($data[$ak->idakun]))){
                                
                                // penambahan setiap similarity anatar akun dengan rating yang diberikan akun lain ke barang tersebut
                                $data3[$allbar->idbarang] = $data3[$allbar->idbarang] +  $data[$ak->idakun] * $tempp->hasil;
                                
                            }
                            
                        }
                        // proses perhitungan predict yang akan diberikan oleh user ke barang tersebut
                        $data3[$allbar->idbarang] = $data3[$allbar->idbarang] / $data2['hore'];
                        $predict = array(
                            'idbarang' => $allbar->idbarang,
                            'idakun' => $this->session->userdata('idakun'),
                            'predict' => $data3[$allbar->idbarang]
                        );
        
                        // memasukan data predict rating barang tersebut ke dalam database
                        $predictdata = $this->Predict_M->daftar_predict($predict);
                    }
        
                }
            }
            
        }

        
        $data = array(
            'barang' => $this->Barang_M->get_data()
        );
        $this->load->view('header');
        $this->load->view('landingpage',$data);
        $this->load->view('footer');
    }
}
