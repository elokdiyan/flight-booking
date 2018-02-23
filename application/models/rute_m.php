<?php
class rute_m extends CI_Model
{
	function gets(){
		return $this->db->get('rute');
	}
}