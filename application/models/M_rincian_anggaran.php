<?php

class M_rincian_anggaran extends CI_Model
{

	var $table = 'rincian_anggaran'; //nama tabel dari database
	var $column_order = array(null,'id_sub', 'id_main', 'id_jenis', 'uraian', 'pemicu_biaya', 'quantity', 'harga_satuan', 'jumlah', 'keterangan', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des', 'tahun', 'id_user', 'id_number', 'name_jenis', 'nama'); //field yang ada di table user
	var $column_search = array('id_number', 'nama', 'name_jenis', 'quantity', 'jumlah', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des', 'tahun'); //field yang diizin untuk pencarian 
	var $order = array('id_rincian' => 'asc'); // default order 
	var $primary = 'id_rincian';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query($tahun = null, $id=null)
	{
		$this->db->select('*');
		$this->db->from('rincian_anggaran a');
		$this->db->join('submain_account b', 'b.id_submain = a.id_sub', 'left');
		$this->db->join('main_account c', 'c.id_main=a.id_main', 'left');
		$this->db->join('penggunaan d', 'a.id_rincian=d.id_rincian', 'left');
		$this->db->where('a.tahun', $tahun);

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

	function get_datatables($tahun=null, $id=null)
	{
		$this->_get_datatables_query($tahun, $id);
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
		$this->db->from('rincian_anggaran a');
		$this->db->join('submain_account b', 'a.id_sub=b.id_submain', 'left');
		$this->db->join('main_account c', 'b.id_main=c.id_main', 'left');
		$this->db->where($this->primary, $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_by_id_detail($id)
	{
		$this->db->select("*");
		$this->db->from('rincian_anggaran a');
		$this->db->join('submain_account b', 'a.id_sub=b.id_submain', 'left');
		$this->db->where('a.id_sub', $id);
		$this->db->join('penggunaan c', 'c.id_rincian=a.id_rincian', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete_by_id($id)
	{
		$this->db->where($this->primary, $id)
			->delete($this->table);
		return $this->db->affected_rows();
	}

	// Get Modal
	public function getBySubmain($idSubmain)
	{
		$this->db->select('*');
		$this->db->from('rincian_anggaran a');
		$this->db->join('submain_account b', 'a.id_sub=b.id_submain', 'left');
		$this->db->where('b.id_submain', $idSubmain);
		$this->db->group_by('a.id_sub');
		return $this->db->get('rincian_anggaran')->result_array();
	}

	public function export($id){
		$this->db->select('*');
		$this->db->from('rincian_anggaran a');
		$this->db->join('submain_account b', 'b.id_submain=a.id_sub', 'left');
		$this->db->join('main_account c', 'c.id_main=b.id_main', 'left');
		$this->db->where('a.id_user', $id);
		$query = $this->db->get()->result();
		return $query;
	}
}
