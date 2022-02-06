<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_anggaran extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_tahun_anggaran');
        $ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

	function index(){
        $data['ses'] = $this->session->userdata('sesinya');
		$this->load->view('tahun_anggaran', $data);
	}

    function get_data_user()
	{
        $list = $this->M_tahun_anggaran->get_datatables();
		$data = array();
		$no = 1;
		foreach ($list as $field) {
			$no++;
			$data[] = [
				"no"         =>$no,
				"tahun"      =>$field->tahun,
				"id_tahun"   =>$field->tahun,
			];
		}

        $output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_tahun_anggaran->count_all(),
			"recordsFiltered" => $this->M_tahun_anggaran->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}
}
