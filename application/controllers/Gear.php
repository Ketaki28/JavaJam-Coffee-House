<?php
class Gear extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $res=$this->Db_Functions->get_gear();
		$data['records']=$res->result();
		$this->load->view('gear',$data);
    $this->load->view('templates/footer');
  }
}
