<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class m_product extends CI_Model
{

	public function get_data($category)
	{

		$query = $this->db->get($category);
		return $query->result();
	}

}

?>