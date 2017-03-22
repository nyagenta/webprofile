<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contents extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contents_model');
	}

	public function index()
	{
		$data['listContent'] = $this->contents_model->getAllContents();
		$this->load->view('contents_view', $data);
	}

	public function addContent(){
		$this->load->view('add_content_view');
	}

	public function addContentDb(){
		$data = array(
			'id_konten' => '', 
			'kategori' => $this->input->post('kategori'),
			'judul' => $this->input->post('judul'), 
			'deskripsi' => $this->input->post('deskripsi') 
			);
		$this->contents_model->addContent($data);
		redirect('contents');
	}

	public function updateContent($id_konten){
		$data['content'] = $this->contents_model->getContent($id_konten);

		$this->load->view('update_content_view', $data);
	}

	public function updateContentDb(){
		$data = array(
			'kategori' => $this->input->post('kategori'),
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi')
		 );
		$condition['id_konten'] = $this->input->post('id_konten');
		// print_r(array_values($data));
		// echo $condition['id_konten'];
		$this->contents_model->updateContent($data, $condition);

		redirect('contents');
	}

	public function deleteContent($id_konten){
		$this->contents_model->deleteContent($id_konten);
		redirect('contents');
	}

}

/* End of file contents.php */
/* Location: ./application/controllers/contents.php */