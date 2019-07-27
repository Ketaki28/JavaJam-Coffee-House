<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class javajam extends CI_Controller {
	public function placeyourordernop()
	{
				#$this->load->view('placeyourordernop');

		$this->form_validation->set_rules('Name', 'Name',  'required|max_length[15]');
		$this->form_validation->set_rules('Email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('Address', 'Address', 'required|max_length[50]');
		$this->form_validation->set_rules('City', 'City',  'required|max_length[15]');
		$this->form_validation->set_rules('State', 'State',  'required|max_length[2]');
		$this->form_validation->set_rules('Zip', 'Zip', 'required|max_length[5]');
		$this->form_validation->set_rules('CreditCard', 'Credit Card', 'required|max_length[16]');
		$this->form_validation->set_rules('ExpMonth', 'Expiry Month', 'required|max_length[2]');
		$this->form_validation->set_rules('ExpYear', 'Expiry Year', 'required|max_length[4]');


		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('placeyourordernop');
		}
		else{
			$this->load->model('Db_Functions');
			$uname = $this->security->xss_clean($this->input->post('Name'));
	    $uemail = $this->security->xss_clean($this->input->post('Email'));
	    $uaddr = $this->security->xss_clean($this->input->post('Address'));
	    $ucity = $this->security->xss_clean($this->input->post('City'));
	    $ustate = $this->security->xss_clean($this->input->post('State'));
	    $uzip  = $this->security->xss_clean($this->input->post('Zip'));
	    $ucreditcard = $this->security->xss_clean($this->input->post('CreditCard'));
	    $uexpMonth = $this->security->xss_clean($this->input->post('ExpMonth'));
	    $uexpYear = $this->security->xss_clean($this->input->post('ExpYear'));
	    $data = array(
	        'name'=>$uname,
	        'email'=>$uemail,
	        'address'=> $uaddr,
	        'city'=> $ucity,
	        'state'=> $ustate,
	        'zip' => $uzip,
	        'creditcard' => $ucreditcard,
	        'month'=> $uexpMonth,
	        'year'=> $uexpYear
	    );
			$this->Db_Functions->place_order($data);
			$data1 = array('product' =>'JavaJam Shirt' ,
		 'product1'=>'Javajam Mug' ,
	   'qty' =>'1' ,
		 'qty1' =>'1',
		 'price' =>'24.95'
		);
		$this->Db_Functions->place_order1($data1);
	}
}
}
