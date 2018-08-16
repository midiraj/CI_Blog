<?php

/**
 * 
 */
class Login extends MY_Controller
{
	
	public function index()
	{
		$this->load->view('public/admin_login');
	}


	public function admin_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','User Name', 'required|alpha|trim');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if ($this->form_validation->run() == TRUE) {
			echo "Validation Successful";
		}else{
			$this->load->view('public/admin_login');
			// echo validation_errors();
		}

	}

}