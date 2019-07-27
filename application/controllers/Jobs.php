<?php
class Jobs extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('jobs');
    $this->load->view('templates/footer');
  }
  public function apply(){
    $this->form_validation->set_rules('myName', 'Name',  'required|max_length[15]');
		$this->form_validation->set_rules('myEmail', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('myExperience', 'Experience', 'required|max_length[50]');
    if ($this->form_validation->run() == FALSE){
      $this->session->set_flashdata('message', validation_errors());
		}
    else{
			$uname = $this->input->post('myName');
			$uemail =$this->input->post('myEmail');
			$uexp = $this->input->post('myExperience');
			$data = array('cName'=>$uname,
									'cEmail'=>$uemail,
									'cExperience'=>$uexp);
                  print_r($data);
			$this->Db_Functions->insert_jobs($data);
 			$this->session->set_flashdata('message', 'form submitted successfully');
		}
    redirect('jobs');
  }
}
