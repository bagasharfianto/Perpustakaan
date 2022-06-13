<?php
class Products extends CI_Controller{
  public function index(){
    echo 'ini Products';
  }
  public function shoes($sandals, $id){
    echo $this->$sandals;
    echo $this->$id;
  }
}