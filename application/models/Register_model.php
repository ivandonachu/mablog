<?php
class Register_model extends CI_Model
{
	public function tambahAkun()
	{
		$data = [
			'nama_pengguna' => htmlspecialchars($this->input->post('nm_pengguna',true)),
			'username' => htmlspecialchars($this->input->post('username',true)),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)

		] ;
		$this->db->insert('account',$data);
	} 
	
}