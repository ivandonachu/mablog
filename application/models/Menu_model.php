
<?php
class Menu_model extends CI_Model
{
	
	public function getPostsAll($limit, $start, $keyword = null)
	{
		return $this->db
		->select("id_post,judul,SUBSTRING(isi,1,150) as isi")
		->like('judul',$keyword)
		->get('blog', $limit, $start)
		->result_array();
	}

	//untuk pagination yg tampil dari seraching
	public function countPosts($keyword=null)
	{
		return $this->db->like('judul', $keyword)->from('blog')->count_all_results();
	}
	
	public function getDetail($id)
	{
		return $this->db
            ->Where('id_post', $id)
            ->get('blog')
            ->row_array();
	}
}






