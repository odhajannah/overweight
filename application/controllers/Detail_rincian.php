<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_rincian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_detail_rincian');
        $ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

    // Tambah Komen

	function index($tahun=null){
        $data['ses'] = $this->session->userdata('sesinya');
        $data['main'] = $this->db->get('main_account')->result_array();
        $data['main'] = array_map(function($main) use($tahun){
            $this->db->select('*');
            $this->db->from('submain_account');
            $this->db->where('id_main', $main['id_main']); 
            $main['sub'] = $this->db->get()->result_array();
            $main['sub'] = array_map(function($sub) use($tahun){
                $this->db->select('*');
                $this->db->from('rincian_anggaran');
                $this->db->where('id_sub', $sub['id_submain']); 
                $this->db->where('tahun', $tahun);
                $sub['rin'] = $this->db->get()->result_array();
                return $sub; 
            }, $main['sub']);
            return $main;
        }, $data['main']);

		$this->load->view('detail_rincian', $data);
	}
}