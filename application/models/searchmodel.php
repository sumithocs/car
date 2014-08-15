<?php

if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Searchmodel extends CI_Model {
	
	public function __construct() {
		parent::__construct ();
	}
	

	public function get_all_active_vehicles() { 
	
		$table1 = "tbl_vehicle";
		$table2 = "tbl_type";
		$table3 = "tbl_make";
		$this->db->select ( '*' );
		$this->db->from($table1 .' as a');
		$this->db->join ( $table2 . ' as b', 'a.typeid  = b.typeid ', 'inner' );
		$this->db->join ( $table3 . ' as c', 'a.makeid  = c.makeid ', 'inner' );
		$this->db->where('a.deleted',0);		
		$query = $this->db->get (  );
		$list = $query->result_array ();
		return $list;
	}
}
	
