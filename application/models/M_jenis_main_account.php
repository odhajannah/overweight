<?php

class M_jenis_main_account extends CI_Model
{

	var $table = 'submain_account'; //nama tabel dari database
	var $column_order = array(null, 'nama_submain', 'nama', 'id_number', 'id_subnumber', 'id_main'); //field yang ada di table user
	var $column_search = array('nama_submain', 'nama', 'id_number', 'id_subnumber'); //field yang diizin untuk pencarian 
	var $order = array('id_number' => 'asc');
	var $primary = 'id_submain';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{


		$this->db->select('*');
		$this->db->from('submain_account a');
		$this->db->join('main_account b', 'b.id_main=a.id_main', 'left');
		$this->db->distinct('id_number');
		$this->db->distinct('nama');

		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) // here order processing
		{

			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function addData($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function getData($id_jenis)
	{
		$this->db->where($this->primary, $id_jenis);
		return $this->db->get($this->table)->result();
	}

	public function update($data, $id)
	{
		$this->db->where($this->primary, $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}
	public function get_by_id($id)
	{
		$this->db->select("*");
		$this->db->from('submain_account a');
		$this->db->join('main_account b', 'b.id_main=a.id_main', 'left');
		$this->db->where($this->primary, $id);
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
	public function getByMain($idMain)
	{
		$this->db->where('id_main', $idMain);
		return $this->db->get('submain_account')->result_array();
	}
}
