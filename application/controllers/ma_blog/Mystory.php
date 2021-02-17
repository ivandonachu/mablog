<?php
class Mystory extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('username'))) {
			redirect('login');
		}
		$this->load->model('Mystory_model');
		$this->load->library('form_validation');


	}
	public function index()
	{	
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'My Story';

		//pagination
		$this->load->library('pagination');

		$config['base_url']='http://localhost/project1/ma_blog/mystory/index';

		if (isset($_POST['submit'])) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = "";
		}

		$config['total_rows'] = $this->Mystory_model->countPosts($data['keyword']);

		$config['per_page']= 9;

		 //styling pagination
		 //pembuka containernya
		$config['full_tag_open'] = '<nav>
		<ul class="justify-content-center pagination">';

        //penutup containernya
		$config['full_tag_close'] = '</ul></nav>';

        //pembuka untuk first page
		$config['first_tag_open'] = '<li class="page-item">';
        //penutup untuk first page
		$config['first_tag_close'] = '</li>';

        //pembuka untuk last page
		$config['last_tag_open'] = '<li class="page-item">';
        //penutup untuk last page
		$config['last_tag_close'] = '</li>';

        //kata/hal yang ditampilin untuk 
        //next link
		$config['next_link'] = '&raquo';
        //pembuka untuk next-link
		$config['next_tag_open'] = '<li class="page-item">';
        //penutup untuk next-link
		$config['next_tag_close'] = '</li>';

        //kata/hal yang ditampilin untuk 
        //previous link
		$config['prev_link'] = '&laquo';
        //pembuka untuk previos-link
		$config['prev_tag_open'] = '<li class="page-item">';
        //penutup untuk previos-link
		$config['prev_tag_close'] = '</li>';

   		//pembuka untuk halaman saat ini
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        //penutup untuk halaman saat ini
		$config['cur_tag_close'] = '</a></li>';

        //pembuka untuk nomor2nya
		$config['num_tag_open'] = '<li class="page-item">';
        //penutup untuk nomor2nya
		$config['num_tag_close'] = '</li>';

        // atribut tambahan untuk setiap anchornya.
		$config['attributes'] = ['class' => 'page-link'];


		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		//searching
		$data['posts'] = $this->Mystory_model
		->getPosts($config['per_page'], $data['start'], $data['keyword']);




		
		$this->load->view('template/header_menu', $data);
		$this->load->view('ma_blog/v_mystory');
		$this->load->view('template/footer_menu');
		
	}

	public function tambahStory()
	{
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'My Story';

		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi','required');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Post Story';

			$this->load->view('template/header_menu', $data);
			$this->load->view('ma_blog/v_tambahstory');
			$this->load->view('template/footer_menu');
		}else{
			$this->Mystory_model->tambahPost();
			$this->session->set_flashdata('message', '<div class="alert alert-success" align="text-center" role="alert">
				Upload Berhasil
				</div>');
			redirect('ma_blog/mystory/tambahstory');
		}

		
	}

	public function lihatDetail($id)
	{
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Detail Story';
		$data['post'] = $this->Mystory_model->getDetail($id);





		$this->load->view('template/header_menu', $data);
		$this->load->view('ma_blog/v_lihatmy',$data);
		$this->load->view('template/footer_menu');


		
	}



	
	public function update($id)
	{   
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = "Update Post";
		$data['post'] = $this->Mystory_model->getPostById($id);

		$this->load->view('template/header_menu', $data);
		$this->load->view('ma_blog/v_update');
		$this->load->view('template/footer_menu');

	}

	public function prosesUpdate($id){
		$this->Mystory_model->updatePost($id);	

			$this->session->set_flashdata('message', '<div class="alert alert-success" align="text-center" role="alert">
				Edit Berhasil
				</div>');
		redirect('ma_blog/mystory');
	}

	
	public function delete($id)
	{
		$this->Mystory_model->deletePost($id);
		redirect('ma_blog/mystory');
	}




	
}