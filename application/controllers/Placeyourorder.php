<?php
class Placeyourorder extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('placeyourordernop');
    $this->load->view('templates/footer');
  }
  public function placeorder(){
    $this->form_validation->set_rules('Name', 'Name',  'required|max_length[15]');
		$this->form_validation->set_rules('Email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('Address', 'Address', 'required|max_length[50]');
		$this->form_validation->set_rules('City', 'City',  'required|max_length[15]');
		$this->form_validation->set_rules('State', 'State',  'required|max_length[2]');
		$this->form_validation->set_rules('Zip', 'Zip', 'required|max_length[5]');
		$this->form_validation->set_rules('CreditCard', 'Credit Card', 'required|max_length[16]');
		$this->form_validation->set_rules('ExpMonth', 'Expiry Month', 'required|max_length[2]');
		$this->form_validation->set_rules('ExpYear', 'Expiry Year', 'required|max_length[4]');
    if ($this->form_validation->run() == FALSE){
      $this->session->set_flashdata('message', validation_errors());
		}
    else{
      //$form_data=$this->input->post();
      $form_data=$this->input->post();
      $data = array(
         'name'=>$form_data['Name'],
         'email'=>$form_data['Email'],
         'address'=> $form_data['Address'],
         'city'=> $form_data['City'],
         'state'=> $form_data['State'],
         'zip' => $form_data['Zip'],
         'creditcard' => $form_data['CreditCard'],
         'month'=> $form_data['ExpMonth'],
         'year'=> $form_data['ExpYear']
     );
      //session data

    // $this->session->all_userdata();

      $grid=$this->session->all_userdata();
      foreach ($grid as $row) {

        $name = $row['desc'];
        $qty = $row['quantity'];
        $cost = $row['cost'];
        $price = $row['price'];

        $data1 = array(
        'product'=>$name,
        'qty'=>$qty,
        'cost'=>$cost,
        'price'=>$price
      );
      $this->db->insert('OrderItems',$data1);
      }

    $this->Db_Functions->place_order($data);
    $this->session->set_flashdata('message', 'form submitted successfully');
    $this->session->sess_destroy();
    }
    redirect('placeyourorder');
  }
}
