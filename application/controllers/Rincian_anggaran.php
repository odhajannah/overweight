<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rincian_anggaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_rincian_anggaran');
		$this->load->model('M_main_account');
		$this->load->model('M_jenis_main_account');
		$ses = $this->session->userdata('sesinya');
		if (!$ses) {
			redirect(base_url() . 'login');
		}
	}

	function index($tahun = null, $id = null)
	{
		$data['ses']= $this->session->userdata('sesinya');
		$data['main2'] = $this->db->get('main_account')->result_array();
		if($id==null){
			$data['main'] = $this->db->get('main_account')->result_array();
		}else{
			$data['main'] = $this->db->where('id_main', $id)->get('main_account')->result_array();
		}
		$data['main_account'] = $this->M_main_account->getWithRincianAnggaranCountNotZero();
		$data['main_account'] = array_map(function ($el1) {
			// Ambil submain dari main
			
			$el1['submain'] = $this->M_rincian_anggaran->getBySubmain($el1['id_main']);
			// Ambil rincian dari submain
			// $el1['submain'] = array_map(function ($el2) {
			// 	$el2['rincian'] = $this->M_rincian_anggaran->getBySubmain($el2['id_submain']);
			// 	return $el2;
			// }, $el1['submain']);
			return $el1;
		}, $data['main_account']);

		$data['tahunnya'] = $tahun;
		$this->load->view('rincian_anggaran', $data);
	}



	// function index($tahun=null, $val=null){
	//     $data['ses'] = $this->session->userdata('sesinya');
	// 	// $data['main'] = $this->db->get('main_account')->result_array();
	// 	$data['main2'] = $this->db->get('main_account')->result_array();
	// 	// $data['jenisnya'] = $this->db->get('submain_account')->result_array();
	//     $data['tahunnya'] = $tahun;
	// 	$this->load->view('rincian_anggaran', $data);
	// }

	function get_data_user($tahun = null)
	{
		$ses = $this->session->userdata('sesinya');
		$list = $this->M_rincian_anggaran->get_datatables($tahun, $ses['id_user']);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field){
			$no++;
			$data[] = [
				"no" => $no,
				"number" => $field->id_number,
				"nama"	 => $field->nama,
				"id_rincian" => $field->id_rincian,
				"nama_submain" => $field->nama_submain,
				"id_subnumber" => $field->id_subnumber,
				"uraian" => $field->uraian,
				"pemicu_biaya" => $field->pemicu_biaya,
				"quantity" => $field->quantity,
				"harga_satuan" => "Rp " . number_format($field->harga_satuan, 2, ',', '.'),
				"jumlah" => "Rp " . number_format($field->jumlah, 2, ',', '.'),
				"keterangan" => $field->keterangan,
				"januari" => "Rp " . number_format(($field->jan - $field->janu), 2, ',', '.'),
				"februari" => "Rp " . number_format(($field->feb - $field->febr), 2, ',', '.'),
				"maret" => "Rp " . number_format($field->mar, 2, ',', '.'),
				"april" => "Rp " . number_format($field->apr, 2, ',', '.'),
				"mei" => "Rp " . number_format($field->mei, 2, ',', '.'),
				"juni" => "Rp " . number_format($field->jun, 2, ',', '.'),
				"juli" => "Rp " . number_format($field->jul, 2, ',', '.'),
				"agustus" => "Rp " . number_format($field->agu, 2, ',', '.'),
				"september" => "Rp " . number_format($field->sep, 2, ',', '.'),
				"oktober" => "Rp " . number_format($field->okt, 2, ',', '.'),
				"november" => "Rp " . number_format($field->nov, 2, ',', '.'),
				"desember" => "Rp " . number_format($field->des, 2, ',', '.'),
				"tahun" => $field->tahun,
			];
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_rincian_anggaran->count_all(),
			"recordsFiltered" => $this->M_rincian_anggaran->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function addData()
	{
		$ses = $this->session->userdata('sesinya');
		if ($this->input->post('submit')) {
			$data = array(
				"id_sub" => $this->input->post('name_jenis'),
				"uraian" => $this->input->post('uraian'),
				"pemicu_biaya" => $this->input->post('pemicu_biaya'),
				"quantity" => $this->input->post('quantity'),
				"harga_satuan" => $this->input->post('harga_satuan'),
				"jumlah"	=> $this->input->post('jumlah'),
				"keterangan" => $this->input->post('keterangan'),
				"jan"		=> $this->input->post('jan'),
				"feb"		=> $this->input->post('feb'),
				"mar"		=> $this->input->post('mar'),
				"apr"		=> $this->input->post('apr'),
				"mei"		=> $this->input->post('mei'),
				"jun"		=> $this->input->post('jun'),
				"jul"		=> $this->input->post('jul'),
				"agu"		=> $this->input->post('agu'),
				"sep"		=> $this->input->post('sep'),
				"okt"		=> $this->input->post('okt'),
				"nov"		=> $this->input->post('nov'),
				"des"		=> $this->input->post('des'),
				"tahun"		=> $this->input->post('tahun'),
				"id_user"	=> $ses['id_user'],
			);
			if ($this->input->post('tipe') == 'update') {
				$id = $this->input->post('id_rincian');
				$this->M_rincian_anggaran->update($data, $id);
				redirect('rincian_anggaran/index/' . $this->input->post('tahun'));
			} else {
				$this->M_rincian_anggaran->addData($data);
				redirect('rincian_anggaran/index/' . $this->input->post('tahun'));
			}
		}
	}

	public function ajax_edit($id)
	{
		$data = $this->M_rincian_anggaran->get_by_id($id);
		echo json_encode(array(
			"id_main"     => $data->id_main,
			"id_rincian"  => $data->id_rincian,
			"id_number"   => $data->id_number,
			"nama"		  => $data->nama,
			"id_submain"  => $data->id_submain,
			"nama_submain" => $data->nama_submain,
			"id_subnumber" => $data->id_subnumber,
			"uraian"	  => $data->uraian,
			"quantity"	  => $data->quantity,
			"pemicu_biaya" => $data->pemicu_biaya,
			"harga_satuan" => $data->harga_satuan,
			"jumlah"	  => $data->jumlah,
			"keterangan"  => $data->keterangan,
			"jan"	 	  => $data->jan,
			"feb"		  => $data->feb,
			"mar"		  => $data->mar,
			"apr"		  => $data->apr,
			"mei"		  => $data->mei,
			"jun"		  => $data->jun,
			"jul"		  => $data->jul,
			"agu"		  => $data->agu,
			"sep"		  => $data->sep,
			"okt"		  => $data->okt,
			"nov"		  => $data->nov,
			"des"		  => $data->des,
		));
	}

	public function ajax_detail($id)
	{
		$list = $this->M_rincian_anggaran->get_by_id_detail($id);
		echo json_encode($list);	
	}

	public function ajax_delete($id)
	{
		$this->db->select('tahun');
		$this->db->where('id_rincian', $id);
		$tahun = $this->db->get('rincian_anggaran')->row();
		$thn = $tahun->tahun;
		$this->M_rincian_anggaran->delete_by_id($id);
		redirect('rincian_anggaran/index/' . $thn);
	}

	public function get_main()
	{
		$id = $this->input->post('id');
		$this->db->where('id_main', $id);
		$data = $this->db->get('submain_account')->result_array();
		echo json_encode($data);
	}

	public function a(){
		include APPPATH.'libraries/PHPExcel.php';

	}

	public function export(){
        // Load plugin PHPExcel nya
		include APPPATH.'libraries/PHPExcel.php';
		
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                     ->setLastModifiedBy('My Notes Code')
                     ->setTitle("Data Gedung")
                     ->setSubject("Gedung")
                     ->setDescription("Laporan Semua Data Gedung")
                     ->setKeywords("Data Gedung");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA Gedung"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Main"); // Set kolom B3 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Submain"); // Set kolom C3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "Uraian"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Pemicu Biaya"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "Quantity");
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Harga Satuan");
        $excel->setActiveSheetIndex(0)->setCellValue('H3', "Jumlah");
        $excel->setActiveSheetIndex(0)->setCellValue('I3', "Keterangan");
        $excel->setActiveSheetIndex(0)->setCellValue('J3', "Januari");
        $excel->setActiveSheetIndex(0)->setCellValue('K3', "Februari");        
        $excel->setActiveSheetIndex(0)->setCellValue('L3', "Maret");
        $excel->setActiveSheetIndex(0)->setCellValue('M3', "April");
        $excel->setActiveSheetIndex(0)->setCellValue('N3', "Mei");
        $excel->setActiveSheetIndex(0)->setCellValue('O3', "Juni");
        $excel->setActiveSheetIndex(0)->setCellValue('P3', "Juli");
        $excel->setActiveSheetIndex(0)->setCellValue('Q3', "Agustus");
        $excel->setActiveSheetIndex(0)->setCellValue('R3', "September");
        $excel->setActiveSheetIndex(0)->setCellValue('S3', "Oktober");
        $excel->setActiveSheetIndex(0)->setCellValue('T3', "November");
        $excel->setActiveSheetIndex(0)->setCellValue('U3', "Desember");
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
		$ses = $this->session->userdata('sesinya');
        $siswa = $this->M_rincian_anggaran->export($ses['id_user']);
		echo var_dump($siswa);

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
            
          $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id_main);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->id_submain);
          $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->uraian);
          $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->pemicu_biaya);
          $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->quantity);
          $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->harga_satuan);
          $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->jumlah);
          $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->keterangan);
          $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->jan);
          $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->feb);
          $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->mar);
          $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->apr);
          $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->mei);
          $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->jun);
          $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->jul);
          $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->agu);
          $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->sep);
          $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->okt);
          $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data->nov);
          $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->des);
         
          
          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
          
          $no++; // Tambah 1 setiap kali looping
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('S')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('T')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('U')->setWidth(30); // Set width kolom E
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Budgeting");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan budgeting.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        ob_end_clean();
        $write->save('php://output');
    }
}
