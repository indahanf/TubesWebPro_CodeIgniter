<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class c_akun extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('akun');
		$this->load->model('m_product');
		$this->load->helper('url');

	}
	public function index(){

		if($this->session->userdata('level')){
			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('head');
				 $this->load->view('v_admin'); //belom ada
			}
			if ($this->session->userdata('level') == 'member') {
				$this->load->view('head');
				$this->load->view('v_member'); //belom ada		
			}

			
		}else{
				$data  = $this->akun->cekLogin()->result_array();
			    $username = $this->input->post('username');
			    $password = $this->input->post('password');
			    $masuk = 0;

				    foreach ($data as $d){
				      if($username == $d['username'] && $password==$d['password']){
				        $this->session->set_userdata('username', $username);
				        $masuk = 1;
				        if($d['level']== 'admin'){
				          $this->session->set_userdata('level', 'admin');
				           $data['data']=$this->akun->cekLogin()->result_array();
				           $this->load->view('head',$data);
				           $this->load->view('v_admin'); //belom ada
				        }

				        if($d['level']== 'member'){
				          $this->session->set_userdata('level', 'member');
				           $data['data']=$this->akun->cekLogin()->result_array();
				           $this->load->view('head', $data);
				           $this->load->view('v_member'); //belom ada

				        }
				      }
				    }
					    if($masuk==0){
					      $this->session->set_flashdata('login', 'login gagal');
					      $this->load->view('head');
					      $this->load->view('v_login');
				  	 	}
		
			}   		
	}

	public function createAkun(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$photo = $this->input->post('photo');

			$this->akun->akunRegister($username, $email, $passoword,$nama, $alamat,$photo);
        	$this->session->set_flashdata('pesan', 'Create Member Berhasil');
        	$this->load->view('v_login');			
		}
		else{
		$this->load->view('head');
		$this->load->view('v_register');

		}
	}
}
