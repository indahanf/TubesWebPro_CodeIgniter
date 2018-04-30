<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	public function akunRegister($username, $email, $password, $nama, $alamat){
		
    $data = array(
      	'username' => $username,
      	'email' => $email,
      	'password' => $password,
      	'name' => $nama,
      	'alamat' => $alamat,
      	'photo' => 'default.svg',
      	'level' => 'member'
    );
		$this->db->insert('users', $data);
	}

	public function cekLogin(){
		return $query = $this->db->get('users');
	}




}