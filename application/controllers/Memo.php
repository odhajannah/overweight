<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('M_memo');
        $this->load->library(array('pdf','session'));
        $this->load->helper('url', 'form');
        $ses = $this->session->userdata('sesinya');
		
    }   

    public function index()
	{
        $data['ses'] = '';
        $this->load->model('M_memo');
        $data['internal']= $this->M_memo->getdata();
        $data['external']= $this->M_memo->getdatae();
        $nomor = $this->db->order_by('id', 'DESC')->limit(1)->get('external')->row();
        $urutan = (int) $nomor->nomor_surat;
        $data['nomor'] = $urutan+1;
        $this->load->view('dashboard', $data);

	}

	public function tambahData(){
		$this->load->model('M_memo');
            if($this->input->post('submit')){

                $data = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'tujuan_surat' => $this->input->post('tujuan_surat'),
                    'hal' => $this->input->post('hal'),
                    'keterangan' => $this->input->post('keterangan'),
                    'isi' => $this->input->post('isi'),
                    'tanggal_rapat' => $this->input->post('tanggal_rapat'),
                    'waktu_rapat' => $this->input->post('waktu_rapat'),
                    'tempat_rapat' => $this->input->post('tempat_rapat'),
                    'penutup' => $this->input->post('penutup'),                   
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                );
                if($this->input->post('tipe')=='update'){
                    $this->M_memo->editData($data, $this->input->post('id'));
                    redirect(base_url('memo'));    
                }else{
                    $this->M_memo->addData($data);
                    redirect(base_url('memo'));    
                }
            }else{
            	echo 'data tidak tersimpan';

            }
        }

	public function tambahDataExternal(){
		$this->load->model('M_memo');
            if($this->input->post('submit')){
                if($this->input->post('id')){
                    $query= $this->db->where('id', $this->input->post('id'))->get('external')->row();
                    $nomor = $query->nomor_surat;
                }else{
                    $nomor = $this->db->order_by('id', 'DESC')->limit(1)->get('external')->row();
                    $urutan = (int) $nomor->nomor_surat;
                    $no = $urutan + 1;
                }
                $kalimat = $this->input->post('tembusan'); 
                $arr_kalimat = explode (",",$kalimat);
                $data = array(
                    'nomor_surat' => sprintf("%03s", $no),
                    'hari_tanggal' => $this->input->post('hari_tanggal'),
                    'tujuan' => $this->input->post('tujuan'),
                    'tembusan' => json_encode($arr_kalimat),
                    'dari' => $this->input->post('dari'),
                    'lampiran' => $this->input->post('lampiran'),
                    'perihal' => $this->input->post('perihal'),
                    'keterangan' => $this->input->post('keterangan'),
                    'isi' => $this->input->post('isi'),
                    'penutup' => $this->input->post('penutup'),                   
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                );
                if($this->input->post('tipe')=='update'){
                    $this->M_memo->editDataExternal($data, $this->input->post('id'));
                    redirect(base_url('memo'));    
                }else{
                    $this->M_memo->addDataExternal($data);
                    redirect(base_url('memo'));    
                }
            }else{
            	echo 'data tidak tersimpan';

            }
        }



    public function internalPdf($id=null)
    {
        $this->load->model('M_memo');
        $data['ses'] = $this->session->userdata('sesinya');
        $data['internal']= $this->M_memo->getdatainternal($id);
        // $this->load->library('pdf');
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan.pdf";
        $this->load->view('surat/surat_internal', $data);
    

    }

    public function externalPdf($id=null)
    {
        $this->load->model('M_memo');
        $data['ses'] = $this->session->userdata('sesinya');
        $data['external']= $this->M_memo->getdataexternal($id);
        // $this->load->library('pdf');
        // $this->pdf->Image('assets/image/logobk2.jpg');
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan.pdf";
        $this->load->view('surat/surat_external', $data);
    

    }

    public function internal_delete($id){
        $this->M_memo->delete_internal($id);
        redirect('memo');
    }

    public function external_delete($id){
        echo $id;
        $this->M_memo->delete_external($id);
        redirect('memo');
    }
    
    public function get_detail_internal($id=null)
    {
      
		$data = $this->M_memo->getdatainternalid($id);
      
		echo json_encode(array(
			"id"   => $data->id,
			"tanggal" => $data->tanggal,
			"waktu_rapat"   => $data->waktu_rapat,
			"tujuan_surat"   => $data->tujuan_surat,
			"hal"   => $data->hal,
			"keterangan"   => $data->keterangan,
			"isi"   => $data->isi,
			"tanggal_rapat"   => $data->tanggal_rapat,
			"tempat_rapat"   => $data->tempat_rapat,
			"penutup"   => $data->penutup,
			"jabatan"   => $data->jabatan,
			"nama"		=> $data->nama,
		));
	}

    public function get_datail_external($id=null){
      
		$data = $this->M_memo->getdataexternalid($id);
		echo json_encode(array(
			"id"   => $data->id,
			"nomor_surat" => $data->nomor_surat,
			"hari_tanggal"   => $data->hari_tanggal,
			"tujuan"   => $data->tujuan,
			"tembusan"   => $data->tembusan,
			"dari"   => $data->dari,
			"lampiran"   => $data->lampiran,
			"perihal"   => $data->perihal,
			"keterangan"   => $data->keterangan,
			"isi"   => $data->isi,
			"penutup"   => $data->penutup,
			"jabatan"   => $data->jabatan,
			"nama"		=> $data->nama,
		));
	}
}
	
