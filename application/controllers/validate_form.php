<?php

class validate_form extends CI_Controller {
        function __construct(){
        	parent::__construct();
        	$this->load->helper('url');
          $this->load->helper('form');
//
   //$this->load->helper('form');
 }

    function index()
	{
    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('myName', 'Name',  'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('myEmail', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('dmobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('myExperience', 'Experience', 'required|min_length[10]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('jobs');
		}
		else
		{
			#$this->load->view('formsubmit');
      echo "Success";
		}

	}
}

?>
