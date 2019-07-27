<?php
class Cart extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('cart');
    $this->load->view('templates/footer');
  }
  public function addCart(){
    $form_data=$this->input->post();
    print_r($form_data);
    if($this->session->userdata($form_data['desc'])!=null){
      $product=$this->session->userdata($form_data['desc']);
      $product['quantity']=$product['quantity']+1;
      $product['price']=$product['cost']*$product['quantity'];
      $this->session->set_userdata($product['desc'],$product);
    }
    else{
      $form_data['price']=$form_data['cost'];
      $form_data['quantity']=1;
      $this->session->set_userdata($form_data['desc'],$form_data);
    }
    redirect('cart');
  }
}
