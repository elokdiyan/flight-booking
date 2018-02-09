<?php
/**
* 
*/
class m_cari extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function search($s){
		// $this->db->like('bali','$keyword');
		$this->db->get('tb_rute');
	}
}