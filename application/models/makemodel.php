<?php

if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Makemodel extends CI_Model {
	
	public function __construct() {
		parent::__construct ();
	}
	

	public function get_all_makes() { 
	
		$table = "tbl_make";
		$this->db->select ( '*' );
		$this->db->from($table);
		$query = $this->db->get();
		$list = $query->result_array();
		return $list;
	}
}
	
