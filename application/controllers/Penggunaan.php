<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunaan extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_penggunaan');
        $ses = $this->session->userdata('sesinya');
	      if (!$ses) {
	         redirect(base_url().'login');
	     }
	}

	function index($tahun=null){
		$ses = $this->session->userdata('sesinya');
        $data['ses'] = $ses;
		$data['uraian'] = $this->M_penggunaan->uraian($tahun, $ses['id_user']);
		$data['tahunnya'] = $tahun;
		$this->load->view('penggunaan', $data);
	}

    function get_data_user($tahun=null)
	{
		$ses = $this->session->userdata('sesinya');
        $list = $this->M_penggunaan->get_datatables($tahun, $ses['id_user']);
		$data = array();
		$no = 1;
		foreach ($list as $field) {
			$no++;
			$data[] = [
				"no"         =>$no,
				"tahun"      =>$field->tahunn,
				"uraian"	 =>$field->uraian,
				"janu" => "Rp " . number_format($field->janu, 2, ',', '.'),
				"febr" => "Rp " . number_format($field->febr, 2, ',', '.'),
				"mare" => "Rp " . number_format($field->mare, 2, ',', '.'),
				"apri" => "Rp " . number_format($field->apri, 2, ',', '.'),
				"meii" => "Rp " . number_format($field->meii, 2, ',', '.'),
				"juni" => "Rp " . number_format($field->juni, 2, ',', '.'),
				"juli" => "Rp " . number_format($field->juli, 2, ',', '.'),
				"agus" => "Rp " . number_format($field->agus, 2, ',', '.'),
				"sept" => "Rp " . number_format($field->sept, 2, ',', '.'),
				"okto" => "Rp " . number_format($field->okto, 2, ',', '.'),
				"nove" => "Rp " . number_format($field->nove, 2, ',', '.'),
				"dese" => "Rp " . number_format($field->dese, 2, ',', '.'),
				"id_penggunaan" => $field->id_penggunaan,
			];
		}

        $output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_penggunaan->count_all(),
			"recordsFiltered" => $this->M_penggunaan->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function addData(){
		$ses = $this->session->userdata('sesinya');
		if($this->input->post('submit')){
			$data = array(
				"id_rincian"=> $this->input->post('uraian'),
				"janu"	 	 =>$this->input->post('janu'),
				"febr"	 =>$this->input->post('febr'),
				"mare"	 =>$this->input->post('mare'),
				"apri"	 =>$this->input->post('apri'),
				"meii"	 =>$this->input->post('meii'),
				"juni"	 =>$this->input->post('juni'),
				"juli"	 =>$this->input->post('juli'),
				"agus"	 =>$this->input->post('agus'),
				"sept"	 =>$this->input->post('sept'),
				"okto"	 =>$this->input->post('okto'),
				"nove"	 =>$this->input->post('nove'),
				"dese"	 =>$this->input->post('dese'),
				"tahunn"	=> $this->input->post('tahun'),
				"id_user"	=> $ses['id_user']

			);
			if($this->input->post('tipe') == 'update'){
				$this->M_penggunaan->update($data, $this->input->post('id'));
				redirect('Penggunaan', 'refresh');
			}else{
				$this->M_penggunaan->addData($data);
				redirect('Penggunaan', 'refresh');
			}
		}
	}

	
	public function ajax_edit($id)
	{
		$data = $this->M_penggunaan->get_by_id($id);
		echo json_encode(array(
			"id_rincian"  => $data->id_rincian,
			"janu"	 	 =>$data->janu,
				"febr"	 =>$data->febr,
				"mare"	 =>$data->mare,
				"apri"	 =>$data->apri,
				"meii"	 =>$data->meii,
				"juni"	 =>$data->juni,
				"juli"	 =>$data->juli,
				"agus"	 =>$data->agus,
				"sept"	 =>$data->sept,
				"okto"	 =>$data->okto,
				"nove"	 =>$data->nove,
				"dese"	 =>$data->dese,
			"tahun"	 	  => $data->tahunn,
			"id_penggunaan"	 	  => $data->id_penggunaan,
		));
	}

	public function ajax_delete($id)
	{
		$this->M_penggunaan->delete_by_id($id);
		redirect('penggunaan');
	}

}
