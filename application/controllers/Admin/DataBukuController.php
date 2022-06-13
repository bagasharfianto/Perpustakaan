<?php

class DataBukuController extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //load model divisi_model,nama objeknya = divisi
    $this->load->model('Buku_model','Buku');
  }

  public function index()
  {
    $tabel = 'buku';
    $data['records'] = $this->Buku->find_all($tabel);

    $this->load->view('Layouts/header');
    $this->load->view('Layouts/Menu');
    $this->load->view('Admin/DataBuku/indexBuku',$data);
    $this->load->view('Layouts/footer');
  }

  public function tambah(){
    $tabel = 'golongan';
    $data['Golongan'] = $this->Buku->find_all($tabel);
    
    $this->load->view('Layouts/header');
    $this->load->view('Layouts/Menu');
    $this->load->view('Admin/DataBuku/Tambah',$data);
    $this->load->view('Layouts/footer');
  }

  public function tambah_save(){
    //Pengecekan inputan Pengarang
    $table = 'pengarang';
    $kolom = 'pengarang';
    $kolom2 = 'Kode_Pengarang';
    $NamaPengarang =  $this->input->post('NamaPengarang');
    $KodePengarang = "";
    $data["DBPengarang"] =$this->Buku->find($table,$kolom,$kolom2,$NamaPengarang);
    if ($data["DBPengarang"]["Hasil"] >= 1) {
        $KodePengarang = $data["DBPengarang"]["Kode_Pengarang"] ;
    }else{
      $count = $this->Buku->CountDataPengarang();
      $count +=1;
      $KodePengarang = "PE_" . $count;
      $NamaPengarang = $NamaPengarang;
      $data=[
        'Kode_Pengarang' => $KodePengarang,
        'pengarang' => $NamaPengarang
      ];
      $this->Buku->insert($table,$data);
    }

    //Pengecekan Penerbit
    $table = 'penerbit';
    $kolom = 'penerbit';
    $kolom2= 'Kode_Penerbit';
    $NamaPenerbit =  $this->input->post('NamaPenerbit');
    $KodePenerbit = "";
    $data["DBpenerbit"] =$this->Buku->find($table,$kolom,$kolom2,$NamaPenerbit);
    if ($data["DBpenerbit"]["Hasil"] >= 1) {
      $KodePenerbit = $data["DBpenerbit"]["Kode_Penerbit"] ;
    }else{
      $count = $this->Buku->CountDataPenerbit();
      $count +=1;
      $KodePenerbit = "PN_" . $count;
      $NamaPenerbit = $NamaPenerbit;
      $data=[
        'Kode_Penerbit' => $KodePenerbit,
        'penerbit' => $NamaPenerbit
      ];
      $this->Buku->insert($table,$data);
    }

   //Kode Pemberian
    $table = 'sumberperoleh';
    $kolom = 'SumberPeroleh';
    $kolom2= 'Kode_Pemberian';
    $NamaPemberian =  $this->input->post('NamaPemberian');
    $KodePemberian = "";
    $data["DBSumberPeroleh"] =$this->Buku->find($table,$kolom,$kolom2,$NamaPemberian);
    if ($data["DBSumberPeroleh"]["Hasil"] >= 1) {
      $KodePemberian = $data["DBSumberPeroleh"]["Kode_Pemberian"] ;
    }else{
      $count = $this->Buku->CountDataPemberian();
      $count +=1;
      $KodePemberian = "SP_" . $count;
      $NamaPemberian = $NamaPemberian;
      $data=[
        'Kode_Pemberian' => $KodePemberian,
        'SumberPeroleh' => $NamaPemberian
      ];
      $this->Buku->insert($table,$data);
    }

    $data = [
      'TglMasukPerpus' => $this->input->post('TglMasukPerpus'),
      'NoUrutBuku' => $this->input->post('NoUrutBuku'),
      'NoIndukBuku' => $this->input->post('NoIndukBuku'),
      'KodePengarang' => $KodePengarang,
      'JudulBuku' => $this->input->post('JudulBuku'),
      'KodePenerbit' => $KodePenerbit,
      'TahunTerbit' => $this->input->post('TahunTerbit'),
      'Harga' => $this->input->post('Harga'),
      'KodePemberian' =>  $KodePemberian,
      'Golongan' => $this->input->post('Golongan'),
      'eksemplar' => $this->input->post('eksemplar'),
      'Keterangan' => $this->input->post('Keterangan'),
    ];
    $table ='buku';
    $this->Buku->insert($table,$data);
    redirect(base_url('dataBuku'));
  }

  function edit(){
    $id   = $this->uri->segment(4);
    $data = $this->Buku->find_by_id($id);
    $tabel = 'golongan';
    $data['DataGolongan'] = $this->Buku->find_all($tabel);
    $this->load->view('Layouts/header');
    $this->load->view('Layouts/Menu');
    $this->load->view('Admin/DataBuku/edit',$data);
    $this->load->view('Layouts/footer');
  }

  function edit_save(){
    $id = $this->input->post('Id');
    
    $data=[
      'TglMasukPerpus' => $this->input->post('TglMasukPerpus'),
      'NoUrutBuku' => $this->input->post('NoUrutBuku'),
      'NoIndukBuku' => $this->input->post('NoIndukBuku'),
      'KodePengarang' => $this->input->post('KodePengarang'),
      'JudulBuku' => $this->input->post('JudulBuku'),
      'KodePenerbit' => $this->input->post('KodePenerbit'),
      'TahunTerbit' => $this->input->post('TahunTerbit'),
      'Harga' => $this->input->post('Harga'),
      'KodePemberian' => $this->input->post('KodePemberian'),
      'Golongan' => $this->input->post('Golongan'),
      'eksemplar' => $this->input->post('eksemplar'),
      'Keterangan' => $this->input->post('Keterangan')
    ];
    $this->Buku->update($id,$data);
    redirect(base_url('dataBuku'));
  }

  function hapusDataBuku(){
    $NamaId = 'NoUrutBuku';
    $tabel  = 'buku';
    $id = $this->uri->segment(4);
    $this->Buku->delete($id,$NamaId,$tabel);
    redirect(base_url('dataBuku'));
  }
  
}