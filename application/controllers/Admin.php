<?php

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('user_id')) {
			return redirect('login');
		}
	}

	public function dashboard()
	{
		$this->load->model('articlesmodel','articles');
		$articles = $this->articles->article_list();
		$this->load->view('admin/dashboard',['articles' => $articles]);
	}

	public function add_article()
	{

	}

	public function edit_article()
	{
		
	}

	public function delete_article()
	{
		
	}
}