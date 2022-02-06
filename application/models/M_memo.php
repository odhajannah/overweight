
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_memo extends CI_Model{

	function addData($data)
	{
        $query = $this->db->insert('internal',$data);
        return true;
	}

	function addDataExternal($data)
	{
        $query = $this->db->insert('external',$data);
        return true;
	}

	public function getdata()
	{
		$query = $this->db->get('internal');
		return $query->result_array(); 
	}

	public function getdatae()
	{
		$query = $this->db->get('external');
		return $query->result_array(); 
	}

	public function getdatainternal($id=null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('internal');
		return $query->result_array(); 
	}
	public function getdatainternalid($id=null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('internal');
		return $query->row(); 
	}

	public function getdataexternal($id=null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('external');
		return $query->result_array(); 
	}
	public function getdataexternalid($id=null)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('external');
		return $query->row(); 
	}
	public function delete_internal($id){
		$this->db->where('id', $id)
				->delete('internal');
		return $this->db->affected_rows();
    }

	public function delete_external($id){
		$this->db->where('id', $id)
				->delete('external');
		return $this->db->affected_rows();
    }

	public function editDataExternal($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('external', $data);
		return $this->db->affected_rows();
	}

	public function editData($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('internal', $data);
		return $this->db->affected_rows();
	}
}
?>