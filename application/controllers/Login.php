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
			// echo "Validation Successful";
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username, $password);
			if($login_id){
				// creadentials valid, login user
				$this->session->set_userdata('user_id', $login_id);

				// $this->load->view('admin/dashboard');
				return redirect('admin/dashboard')

			}else
			{
				echo "Password Not Match";
				// authentication failed.
			}


		}else{
			$this->load->view('public/admin_login');
			// echo validation_errors();
		}

	}

}