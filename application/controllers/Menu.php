<?php
class Menu extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('menu');
    $this->load->view('templates/footer');
  }
}
