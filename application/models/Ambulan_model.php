<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Ambulan_model extends CI_Model {

	public function get_ambulan() {
		$this->db->select('*');
		$this->db->from('ambulan');
		return $this->db->get();
	}
}
