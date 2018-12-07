<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webcreintors extends CI_Controller {
	public function index(){
			$data['middel_body'] = 'index';
			$data['keep_slider'] = true;
			$this->load->view('Template',$data);
	}
	public function service(){
			$data['middel_body'] = 'service';
			$this->load->view('Template',$data);
	}
	public function company(){
			$data['middel_body'] = 'company';
			$this->load->view('Template',$data);
	}
	public function works(){
			$data['middel_body'] = 'works';
			$this->load->view('Template',$data);
	}
	
	public function contact(){

		    //$contactArray = $this->Master_model->getRecords('contact_tbl');
		    //var_dump($contactArray);
			$form_data = $this->input->post();
			// var_dump($form_data);
			if (!empty($form_data)){
	      	// or just the username:
		      	$name = $this->input->post("name");
		      	$email = $this->input->post("email");
		      	$subject = $this->input->post("subject");
		      	$comment = $this->input->post("comment");
		      	$contactform=array();
		      		$contactform['name']= $this->input->post("name");
		      		$contactform['email']= $this->input->post("email");
		      		$contactform['subject']= $this->input->post("subject");
		      		$contactform['comment']= $this->input->post("comment");
		      	

			    $inserted_result = $this->Master_model->insertRecord('contact_tbl', $contactform);
				if ($inserted_result) {
				 
				 //any code that has to be run after contact us in inserted 
					$config = Array(
					    'protocol' => 'mail',
					    'smtp_host' => 'smtp.googlemail.com',
					    'smtp_port' => 465,
					    'smtp_user' => 'patilkomal07web@gmail.com',
					    'smtp_pass' => 'softwaresolution',
					    'mailtype'  => 'html', 
					    'charset'   => 'utf-8'
					);

					// $this->load->library('email', $config);
					$this->load->library('email');
 					$this->email->initialize($config);
					$this->email->set_newline("\r\n");
					$this->email->from($email, $name);
					$this->email->to('info@Webcreintors.com');
					$this->email->cc('komalpatil@Webcreintors.com');
					$this->email->subject($subject);
					$this->email->message($comment);

				// Set to, from, message, etc.

					$result = $this->email->send();
		      	}

			}

		      	



			$data['middel_body'] = 'contact';
			$this->load->view('Template',$data);
	}
	public function portfolio(){
			$data['middel_body'] = 'portfolio';
			$this->load->view('Template',$data);
	}
	public function presenation(){
			$data['middel_body'] = 'presenation';
			$this->load->view('Template',$data);
	}


}