<?php

class Dashboard extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //load model divisi_model,nama objeknya = divisi
    $this->load->model('Buku_model');
}

  public function index()
  {
    $data["SumBuku"] = $this->Buku_model->CountDataBuku();
    $data["SumGolongan"] = $this->Buku_model->CountDataGolongan();
    $data["SumPenerbit"] = $this->Buku_model->CountDataPenerbit();
    $data["SumPengarang"] = $this->Buku_model->CountDataPengarang();
    
   $this->load->view('Layouts/header');
   $this->load->view('Layouts/Menu');
   $this->load->view('Admin/DashboardView',$data);
   $this->load->view('Layouts/footer');
  }
  
}