<?php

class M_detail_rincian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function get_data($tahun){
        $this->db->select('*');
        $this->db->from('rincian_anggaran a');
        $this->db->join('submain_account b', 'b.id_submain=a.id_sub', 'left');
        $this->db->join('main_account c', 'c.id_main=b.id_main', 'left');
        $this->db->where('a.tahun', $tahun);
        // $this->db->group_by('c.id_number');
        $query = $this->db->get();
        return $query->result_array();
    }

	


}
