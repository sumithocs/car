<?php

if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Vehiclemodel extends CI_Model {
	
	public function __construct() {
		parent::__construct ();
	}
	

	public function add_a_vehicle($data) { 	
		
		$record = $this->db->insert('tbl_vehicle', $data);		
		return $record;
	}
}
	
