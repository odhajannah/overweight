<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_main_account');
		$this->load->library('session');
		$ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

	function index(){
        $data['ses'] = $this->session->userdata('sesinya');
		$this->load->view('main_account', $data);
	}

	function get_data_user()
	{
		$list = $this->M_main_account->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$data[] = [
				"no" => $no,
				"number" => $field->id_number,
				"id_main"=>$field->id_main,
				"nama" =>$field->nama
			];
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_main_account->count_all(),
			"recordsFiltered" => $this->M_main_account->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function addData(){
		if($this->input->post('submit')){
			$this->db->where('id_number', $this->input->post('number'));
			$cek = $this->db->get('main_account');
			$data = array(
				"id_number" => $this->input->post('number'),
				"nama" => $this->input->post('nama'),
				
			);
			if($this->input->post('tipe')=='update'){
				if($cek->num_rows() > 1){
					$message = "Number Code telah Digunakan";
					echo "<script type='text/javascript'>alert('$message');</script>";
					redirect('main_account' ,'refresh');
				}else{
					$id = $this->input->post('id_main');
					$this->M_main_account->update($data, $id);
					redirect('main_account');
				}
				
			}else{
				if($cek->num_rows() > 0){
					$message = "Number Code telah Digunakan";
					echo "<script type='text/javascript'>alert('$message');</script>";
					redirect('main_account' ,'refresh');
					
				}else{
					$this->M_main_account->addData($data);
					redirect('main_account');
				}
			}
		}
	}

	public function ajax_edit($id){
		$data = $this->M_main_account->get_by_id($id);
		echo json_encode(array(
			"id_main"   => $data->id_main,
			"id_number" => $data->id_number,
			"nama"		=> $data->nama,
		));
	}

	public function ajax_delete($id){ 
		$this->M_main_account->delete_by_id($id);
		redirect('main_account');
	}

}
