<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contents_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	function getAllContents(){
		$this->db->select('*');
		$this->db->from('tb_konten');

		return $this->db->get();
	}

	function getContent($id){
		$this->db->select('*');
		$this->db->where('id_konten', $id);
		$this->db->from('tb_konten');

		return $this->db->get();
	}

	function addContent($data){
		$this->db->insert('tb_konten', $data);
	}

	function updateContent($data, $condition){
		$this->db->where($condition);
		$this->db->update('tb_konten', $data);
	}

	function deleteContent($id){
		$this->db->where('id_konten', $id);
		$this->db->delete('tb_konten');
	}

}

/* End of file contents_model.php */
/* Location: ./application/models/contents_model.php */