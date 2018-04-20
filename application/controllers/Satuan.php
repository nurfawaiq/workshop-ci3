<?php
class Satuan extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$session = $this->session->userdata('userid');
		if($session == null) {
			redirect('auth/login');
		}
		$this->load->model('satuan_m', 'satuan');
	}

	public function index()
	{
		$data['row'] = $this->satuan->get();
		$data['title'] = "Tampil Data Satuan";

		$this->load->view('satuan/satuan_data', $data);
	}

	public function add()
	{
		$this->load->view('satuan/satuan_add');
	}

	public function edit($id)
	{
		$query = $this->satuan->get($id);
		$data['row'] = $query->row();
		$this->load->view('satuan/satuan_edit', $data);
	}

	public function proses()
	{
		if (isset($_POST['add'])) {
			$data = $this->input->post(null, TRUE);
			$this->satuan->add($data);
		} else if (isset($_POST['edit'])) {
			$data = $this->input->post(null, TRUE);
			$this->satuan->edit($data);
		}
		redirect('satuan');
	}

	public function del($id)
	{
		if($id != null) {
			$this->satuan->del($id);
		}
		redirect('satuan');
	}

}