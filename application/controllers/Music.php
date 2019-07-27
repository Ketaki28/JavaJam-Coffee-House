<?php
class Music extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $res=$this->Db_Functions->get_music();
    $data['records']=$res->result();
    $this->load->view('music',$data);
    $this->load->view('templates/footer');
  }
}
