<?php


class Logout extends CI_Controller {
		public function __construct()
	{
		parent::__construct();


	}
	public function index()
	{	

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" align="text-center" role="alert">
				Anda telah Logout
				</div>');
			redirect('login');

	}
		

		


	
}