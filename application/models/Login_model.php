<?php
class Login_model extends CI_Model
{
	public function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('account',['username' => $username])->row_array();
		

		if($user){
			if (password_verify($password, $user['password'])) {
				$data =[
					'username' => $user['username'],
					'id_user' => $user['id_user']
				];

				$this->session->set_userdata($data);
				redirect('ma_blog/menu');

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" align="text-center" role="alert">
					Password Salah
					</div>');
				redirect('login');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" align="text-center" role="alert">
				Akun belum terdaftar
				</div>');
			redirect('login');
		}
	} 
	
}