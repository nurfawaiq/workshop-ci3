<?php
class Auth_m extends CI_Model {

	public function login($a, $b)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$params = array(
			'username' => $a,
			'password' => md5($b),
		);
		$this->db->where($params);
		$query = $this->db->get();

		// $query = $this->db->query("SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");

		return $query;
	}
	
}