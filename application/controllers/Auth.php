<?php
class Auth extends CI_Controller {

	public function index()
	{
		redirect('auth/login');
	}

	public function login()
	{
		$session = $this->session->userdata('userid');
		if($session) {
			redirect(site_url());
		}
		$this->load->view('login');
	}

	public function proses_login()
	{
		$this->load->model('auth_m', 'auth');

		if (isset($_POST['login'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$sql = $this->auth->login($username, $password);
			$cek = $sql->num_rows();
			if($cek > 0) {
				$data = $sql->row();
				$sesi = array(
					'userid' => $data->id_user,
					'nama' => $data->nama_lengkap
				);
				$this->session->set_userdata($sesi);
				redirect(site_url());
			} else {
				echo "Login gagal, username / password salah";
			}
		} else {
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('userid', 'nama');
		redirect('auth');
	}
}