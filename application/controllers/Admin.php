<?php

class Admin extends MY_Controller
{
	public function dashboard()
	{
		$this->load->model('articlesmodel','articles');
		$articles = $this->articles->article_list();
		$this->load->view('admin/dashboard',['articles' => $articles]);
	}
}