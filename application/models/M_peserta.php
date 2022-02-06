<?php

class M_peserta extends CI_Model
{



	public function update($data, $id)
	{
		$this->db->where('id_peserta', $id);
		$this->db->update('peserta', $data);
		return $this->db->affected_rows();
	}
	public function get_by_id($id)
	{
		$this->db->select("*");
		$this->db->from('peserta');
		$this->db->where('id_peserta', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_by_id($id)
	{
		$this->db->where($this->primary, $id)
			->delete($this->table);
		return $this->db->affected_rows();
	}

	// Model Baru
	
}
