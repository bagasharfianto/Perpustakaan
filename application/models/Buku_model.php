<?php

class Buku_model extends CI_Model{
  
  public function CountDataBuku()
  {
    return $this->db->count_all('buku');
  }
  public function CountDataGolongan()
  {
    return $this->db->count_all("golongan");
  }
  public function CountDataPenerbit()
  {
    return $this->db->count_all("penerbit");
  }
  public function CountDataPengarang()
  {
    return $this->db->count_all("pengarang");
  }
  public function CountDataPemberian()
  {
    return $this->db->count_all("sumberperoleh");
  }

  public function find_all($tabel){
    return $this->db->get($tabel)->result_array();
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