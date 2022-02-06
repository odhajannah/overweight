<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_peserta');
	}

	public function index()
	{
		$data['dep'] = $this->db->get('departemen')->result_array();
		$this->db->from('peserta a');
		$this->db->join('departemen b', 'a.dept=b.id_dept', 'left');
		$data['peserta'] = $this->db->get()->result_array();
		$this->load->view('home', $data);
	}

	public function addData(){
		if($this->input->post('submit')){
			$data = array(
				'nama' => $this->input->post('nama'),
				'dept' => $this->input->post('dept'),
				'berat' => $this->input->post('berat'),
				'bintang' => 5,
				'poin'	=> 3
			);

			$this->db->insert('peserta', $data);
			redirect('home', 'refresh');
		}
	}

	public function ajax_edit($id)
	{
		$data = $this->M_peserta->get_by_id(1);
		if($data->minggu_1 == 0){
			$minggu = '<option value="1">minggu_1</option>';
		}if($data->minggu_1 != 0  && $data->minggu_2 == 0){
			$minggu = '<option value="1">minggu_1</option><option value="2">minggu_2</option>';
		}if($data->minggu_2 != 0  && $data->minggu_3 == 0){
			$minggu = '<option value="2">minggu_2</option><option value="3">minggu_3</option>';
		}
		echo json_encode(array(
			"id_peserta"  => $data->id_peserta,
			"nama"	 	 =>$data->nama,
			"minggu"	 =>$minggu,

		));
	}

	public function updateData(){
		$id = $this->input->post('id_peserta');
		$minggu = $this->db->where('id_peserta', $id)->get('peserta')->row_array();
		$mingguUpdate = $this->input->post('minggu');
		$mingguSebelumnya = $mingguUpdate - 1;
		$volum = $this->input->post('volum');
		if($mingguUpdate == 1){
			$cekBerat = $minggu['berat'];
			if($volum < $cekBerat){
				if(($cekBerat-$volum) >= 1 || ($cekBerat-$volum) < 2){
					$poin = $minggu['poin'] + 5;
					$star = $minggu['bintang'];
				}else if(($cekBerat-$volum) >= 2){
					$poin = $minggu['poin'];
					$star = $minggu['bintang'] + 3;
				}
			}else{
				$poin = $minggu['poin'];
				$star = $minggu['bintang'];
			}
		}else{
			$cekBeratSebelumnya = $minggu['minggu_'.$mingguSebelumnya];
			if($volum < $cekBeratSebelumnya){
				if(($cekBeratSebelumnya-$volum) >= 1 || ($cekBeratSebelumnya-$volum) < 2){
					$poin = $minggu['poin'] + 5;
					$star = $minggu['bintang'];
				}else if(($cekBeratSebelumnya-$volum) >= 2){
					$star = $minggu['bintang'] + 3;
					$poin = $minggu['poin'];
				}
			}else{
				if(($volum-$cekBeratSebelumnya) >= 1 || ($volum-$cekBeratSebelumnya) < 2){
					$poin = $minggu['poin'] - 2;
					$star = $minggu['bintang'];
				}else if(($volum-$cekBeratSebelumnya) >= 2 || ($volum-$cekBeratSebelumnya) < 3 ){
					$poin = $minggu['bintang'] - 3;
					$star = $minggu['bintang'];
				}else if(($volum-$cekBeratSebelumnya) >= 3 || ($volum-$cekBeratSebelumnya) < 6){
					$poin = $minggu['bintang'] - 3;
					$star = $minggu['bintang'] - 1;
				}else if(($volum-$cekBeratSebelumnya) >= 6){
					$poin = $minggu['bintang'] - 3;
					$star = $minggu['bintang'] - 2;
				}
			}
		}
		
		if($this->input->post('submit')){
			$data = array(
				'minggu_'.$mingguUpdate => $this->input->post('volum'),
				'bintang' => $star,
				'poin' => $poin
			);

			$this->M_peserta->update($data, $id);
			redirect('home', 'refresh');
		}		
	}
}
