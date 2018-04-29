<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	public function akunRegister($username, $email, $passoword,$nama, $alamat,$photo){
		
    $data = array(
      	'username' => $username,
      	'email' => $email,
      	'password' => $password,
      	'nama' => $nama,
      	'alamat' => $alamat,
      	'photo' => $photo,
      	'level' => 'member'
    );
		$this->db->insert('users', $data);
	}

	public function cekLogin(){
		return $query = $this->db->get('users');
	}




}