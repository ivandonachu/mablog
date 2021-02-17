
<?php
class Mystory_model extends CI_Model
{
	
	public function getPosts($limit, $start, $keyword = null)
	{
		return $this->db
		->select("id_post,judul,SUBSTRING(isi,1,150) as isi")
		->like('judul', $keyword)
		->get_where('blog', ['id_user' => $this->session->userdata("id_user")], $limit, $start)
		->result_array();
	}

	//untuk pagination yg tampil dari seraching
	public function countPosts($keyword=null)
	{
		return $this->db->like('judul', $keyword)->from('blog')->count_all_results();
	}

	// Tambah Data
	public function tambahPost(){
		$data = array (
			'judul'=>$this->input->post('judul'),
			'isi'=>$this->input->post('isi'),
			'id_user'=>$this->input->post('id_user'),
		);
		$this->db->insert('blog',$data);
	}

	public function getDetail($id)
	{
		return $this->db
		->Where('id_post', $id)
		->get('blog')
		->row_array();
	}

	public function getPostById($id)
	{
		return $this->db
		->Where('id_post', $id)
		->get('blog')
		->row_array();
	}

		// Update Data
	public function updatePost($id)
	{
			//proses untuk mengambil data inputan dari form dengan method post 
		$data = array(
			'judul'=>$this->input->post('judul'),
			'isi'=>$this->input->post('isi')
		);

			//update yang data update nya adalah data inputan user dari form dan id post nya merupakan parameter yang dibawa dari controller.
		$this->db->where('id_post', $id)->update('blog', $data);
	}
	public function deletePost($id)
	{
		$this->db
		->where('id_post', $id)
		->delete('blog');
	
	}
}






