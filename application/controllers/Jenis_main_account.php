<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_main_account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jenis_main_account');
        $ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

	function index(){
        $data['ses'] = $this->session->userdata('sesinya');
		$data['main'] = $this->db->get('main_account')->result_array();
		$this->load->view('jenis_main_account', $data);
	}

	function get_data_user()
	{

	
		$list = $this->M_jenis_main_account->get_datatables();

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$data[] = [
				"no"         =>$no,
				"nama_submain" =>$field->nama_submain,
				"id_submain"   =>$field->id_submain,
				"id_number"	 =>$field->id_number,
				"id_subnumber" => $field->id_subnumber,
				"nama"		 =>$field->nama,
 			];
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_jenis_main_account->count_all(),
			"recordsFiltered" => $this->M_jenis_main_account->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function addData(){
		if($this->input->post('submit')){
			$data = array(
				"nama_submain" => $this->input->post('nama_submain'),
				"id_subnumber" => $this->input->post('id_subnumber'),
				"id_main"	   => $this->input->post('id_main'),
			);
			if($this->input->post('tipe')=='update'){
				$id = $this->input->post('id_jenis');
				$this->M_jenis_main_account->update($data, $id);
				redirect('jenis_main_account');
			}else{
				$this->M_jenis_main_account->addData($data);
				redirect('jenis_main_account');

			}
		}
	}

	public function ajax_edit($id){
		$data = $this->M_jenis_main_account->get_by_id($id);
		echo json_encode(array(
			"id_submain" 	=> $data->id_submain,
			"nama_submain"=> $data->nama_submain,
			"id_number" => $data->id_number,
			"id_subnumber"=> $data->id_subnumber,
			"nama"		=> $data->nama,
			"id_main"	=> $data->id_main
		));
	}

	public function ajax_delete($id){
		$this->M_jenis_main_account->delete_by_id($id);
		redirect('jenis_main_account');
	}
}
