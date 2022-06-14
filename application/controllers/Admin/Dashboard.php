<?php

class Dashboard extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //load model divisi_model,nama objeknya = divisi
    $this->load->model('Buku_model');
}

  public function index()
  {
    $table = 'buku';
    $data["SumBuku"] = $this->Buku_model->CountData($table);
    $table = 'golongan';
    $data["SumGolongan"] = $this->Buku_model->CountData($table);
    $table = 'penerbit';
    $data["SumPenerbit"] = $this->Buku_model->CountData($table);
    $table = 'pengarang';
    $data["SumPengarang"] = $this->Buku_model->CountData($table);
    
   $this->load->view('Layouts/header');
   $this->load->view('Layouts/Menu');
   $this->load->view('Admin/DashboardView',$data);
   $this->load->view('Layouts/footer');
  }
  
}