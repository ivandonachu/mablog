<?php


class Login extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Login_model');


	}
	public function index()
	{	

		$this->form_validation->set_rules('username','Ussername','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() == false) {
		$data['judul'] = 'Halaman Login';
		$this->load->view('template/header', $data);
		$this->load->view('v_login');
		$this->load->view('template/footer');
		}else{
			$this->Login_model->_login();
			$this->session->set_flashdata('message', '<div class="alert alert-danger" align="text-center" role="alert">
				Akun belum terdaftar
				</div>');
			redirect('login');
		}
		

		


	}
}