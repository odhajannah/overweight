<?php

class M_main_account extends CI_Model
{

	var $table = 'main_account'; //nama tabel dari database
	var $column_order = array(null, 'id_number', 'nama'); //field yang ada di table user
	var $column_search = array('id_number', 'nama'); //field yang diizin untuk pencarian 
	var $order = array('id_main' => 'asc'); // default order 
	var $primary = 'id_main';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{

		$this->db->from($this->table);

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

	public function getData($id_user)
	{
		$this->db->where($this->primary, $id_user);
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
		$this->db->from($this->table);
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
	public function getWithRincianAnggaranCountNotZero()
	{
		$this->db->select('rincian_anggaran.id_main, count(rincian_anggaran.id_rincian) as jumlah_rincian, main_account.id_number, main_account.nama');
		$this->db->group_by('rincian_anggaran.id_main');
		$this->db->join('main_account', 'main_account.id_main = rincian_anggaran.id_main', 'left');
		return $this->db->get('rincian_anggaran')->result_array();
	}
}
