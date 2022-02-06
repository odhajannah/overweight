<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_user_account');
		$ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

	function index(){
        $data['ses'] = $this->session->userdata('sesinya');
		$this->load->view('user_account', $data);
	}

	function get_data_user()
	{
		$list = $this->M_user_account->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$data[] = [
				"no" => $no,
				"id_user"=>$field->id_user,
				"username" =>$field->username,
				"jenis_anggaran"=>$field->jenis_anggaran,
				"role"=>$field->role
			];
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_user_account->count_all(),
			"recordsFiltered" => $this->M_user_account->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function addData(){
		if($this->input->post('submit')){
			$data = array(
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password'),
				"jenis_anggaran" => $this->input->post('jenis_anggaran'),
				"role"	=> $this->input->post('role')
			);
			if($this->input->post('tipe')=='update'){
				$id = $this->input->post('id_user');
				$this->M_user_account->update($data, $id);
				redirect('user_account');
			}else{
				$this->M_user_account->addData($data);
				redirect('user_account');

			}
		}
	}

	public function ajax_edit($id){
		$data = $this->M_user_account->get_by_id($id);
		echo json_encode(array(
			"id_user" 		=> $data->id_user,
			"username"		=> $data->username,
			"password"		=> $data->password,
			"jenis_anggaran"=> $data->jenis_anggaran,
			"role"			=> $data->role,
		));
	}

	public function ajax_delete($id){
		$this->M_user_account->delete_by_id($id);
		redirect('user_account');
	}
}
