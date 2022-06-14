<?php

class Buku_model extends CI_Model{
  
  //Menjumlahkan data dengan inputan nama table
  public function CountData($Table)
  {
    return $this->db->count_all($Table);
  }
  
  //Mencari data dengan inputan table
  public function find_all($tabel){
    return $this->db->get($tabel)->result_array();
  }
  
  //Menampilkan Buku
  public function findAllBooks(){
    return $this->db->query('SELECT buku.TglMasukPerpus,buku.NoUrutBuku,buku.NoIndukBuku,pengarang.Pengarang,buku.JudulBuku,penerbit.Penerbit,buku.TahunTerbit,sumberperoleh.SumberPeroleh,buku.Golongan,buku.Keterangan from buku JOIN pengarang on buku.KodePengarang = pengarang.Kode_Pengarang JOIN penerbit on buku.KodePenerbit = penerbit.Kode_Penerbit JOIN sumberperoleh on buku.KodePemberian = sumberperoleh.Kode_Pemberian;')->result_array();
  }

  public function findBooksbyInput($input){
    return $this->db->query('SELECT buku.TglMasukPerpus,buku.NoUrutBuku,buku.NoIndukBuku,pengarang.Pengarang,buku.JudulBuku,penerbit.Penerbit,buku.TahunTerbit,sumberperoleh.SumberPeroleh,buku.Golongan,buku.Keterangan from buku JOIN pengarang on buku.KodePengarang = pengarang.Kode_Pengarang JOIN penerbit on buku.KodePenerbit = penerbit.Kode_Penerbit JOIN sumberperoleh on buku.KodePemberian = sumberperoleh.Kode_Pemberian WHERE buku.NoUrutBuku = "'.$input.'";')->result_array();
  }

  public function insert($Table,$Data){
    return $this->db->insert($Table,$Data);
  }

  public function update($id,$data){
    $this->db->where('NoUrutBuku',$id);
    return $this->db->update('buku',$data);
  }

  public function find_by_id($id){
    return $this->db->get_where('buku',['NoUrutBuku'=>$id])->row_array();
  }

  public function find($table,$Kolom,$Kolom2,$Input){
    return $this->db->query('SELECT count('.$Kolom.')as "Hasil",'.$Kolom2.'  from '.$table.' where '.$Kolom.'  = "'.$Input.'";')->row_array();
  }


  public function delete($id,$NamaId,$tabel){
    $this->db->where($NamaId,$id);
    $this->db->delete($tabel);
  }

  
}