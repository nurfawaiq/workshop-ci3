<?php
class Satuan extends CI_Controller {

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
		$this->load->view('satuan/satuan_data');
	}

}