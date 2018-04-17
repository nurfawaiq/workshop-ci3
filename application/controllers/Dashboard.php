<?php
class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$session = $this->session->userdata('userid');
		if($session == null) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$nama_user = $session = $this->session->userdata('nama');
		echo "Selamat datang <b>".$nama_user."</b> di halaman utama";
		echo "<br>";
		echo "Silakan <a href=\"".site_url('auth/logout')."\">logout</a>";
	}

}