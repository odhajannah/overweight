<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login');
	}

    function auth(){
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $cek = $this->M_login->cek_login($username, $pass);
        if($cek>0){
            foreach ($cek as $cek){}
            $session_array = array(
                'id_user' => $cek->id_user,
                'username' => $username,
                'role' => $cek->role,
                'jenis_anggaran' => $cek->jenis_anggaran,
            );
            $data = $this->session->set_userdata('sesinya', $session_array);
            echo json_encode($data);
        }else{
            echo json_encode('error');
        }
    }
    
    function logout(){
        $this->session->unset_userdata('sesinya');
		redirect(base_url(),'login');
    }
}
?>