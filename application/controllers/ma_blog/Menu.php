 <?php
class Menu extends CI_Controller {
		public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('username'))) {
			redirect('login');
		}
		$this->load->model('Menu_model');
		$this->load->library('form_validation');


	}
	public function index()
	{	
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'My Story';



		//pagination
		$this->load->library('pagination');

		$config['base_url']='http://localhost/project1/ma_blog/menu/index';

		if (isset($_POST['submit'])) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = "";
		}

		$config['total_rows'] = $this->Menu_model->countPosts($data['keyword']);

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
		$data['posts'] = $this->Menu_model
		->getPostsAll($config['per_page'], $data['start'], $data['keyword']);



		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();

		$data['judul'] = 'Halaman Menu';
		$this->load->view('template/header_menu', $data);
		$this->load->view('ma_blog/v_menu',$data);
		$this->load->view('template/footer_menu');
		
	}
	
	public function lihatDetail($id)
	{
		$data['user'] = $this->db->get_where('account',['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Detail Story';
		$data['post'] = $this->Menu_model->getDetail($id);


	


			$this->load->view('template/header_menu', $data);
			$this->load->view('ma_blog/v_lihat',$data);
			$this->load->view('template/footer_menu');
	

		
	}


		

 
	
}