<?php
/**
* 
*/
class reservation_m extends CI_Model{
	
	function add($value)
	{
		# code...
		return $this->db->insert('reservation', $value);
	}

	function gets()
	{
		return $this->db->get('reservation');
	}

	function edit($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('reservation');
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('reservation');
	}

	function update($id, $value)
	{
		$this->db->where('id', $id);
		return $this->db->update('reservation', $value);
	}
}