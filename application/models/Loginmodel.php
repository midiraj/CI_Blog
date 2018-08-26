<?php

class Loginmodel extends CI_Model
{
	public function login_valid($username, $password){
		/*$q = $this->db->query('Select * from users where uname = $username and pword = $password');*/
		$password = md5($password);
		$q = $this->db->where(['uname' => $username,'pword' => $password])->get('users');
		if ($q->num_rows() > 0) {
			return $q->row()->id;
		}
		else
		{
			return false;
		}

	}
}