<?php 







class Home extends Controllers
{
    public function __construct() {
        // parent::__construct();

        echo "Berhasil";
    }

    public function index()
    {
    $data['judul']= 'Home';
    $this->view('index',$data);

    }
}
