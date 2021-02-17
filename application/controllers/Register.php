<?php


class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Register_model');

	}
	public function index()
	{	
		$this->form_validation->set_rules('username','Username','required|trim',);
		$this->form_validation->set_rules('nm_pengguna','Nama Pengguna','required|trim',);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password Tidak Sama!',
			'min_length' => 'Password Terlalu Pendek!'

		]);
		$this->form_validation->set_rules('password2','Password','required|trim|min_length[6]|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Register';
			$this->load->view('template/header', $data);
			$this->load->view('v_register');
			$this->load->view('template/footer');
		} else{
			
			$this->Register_model->tambahAkun();
			$this->session->set_flashdata('message', '<div class="alert alert-success" align="text-center" role="alert">
				Selamat Akun anda telah dibuat. silahkan login
				</div>');
			redirect('login');
			
		}
		


	}
}