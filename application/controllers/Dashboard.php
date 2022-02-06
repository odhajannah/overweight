<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$ses = $this->session->userdata('sesinya');
		if (!$ses) {
			redirect(base_url().'login');
		}
	}
	public function index()
	{
        $data['ses'] = $this->session->userdata('sesinya');
        $this->load->model('M_memo');
        $data['internal']= $this->M_memo->getdata();
        $data['external']= $this->M_memo->getdatae();
		$nomor = $this->db->order_by('id', 'DESC')->limit(1)->get('external')->row();
        $urutan = (int) $nomor->nomor_surat;
        $data['nomor'] = $urutan+1;
		$this->load->view('dashboard', $data);
	}
}
