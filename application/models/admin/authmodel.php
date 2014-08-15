<?php

if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Authmodel extends CI_Model {
	
	public function __construct() {
		parent::__construct ();
	}
	
	/**
	 * Get Promotion
	 *
	 * @return array
	 * @author Asanka
	 *        
	 */
	public function login($email,$pwd) { 
	
		$table = "tbl_admin";
		$this->db->select ( '*' );
		$this->db->from($table);
		$this->db->where('email',$email);	
		$this->db->where('password',md5($pwd));
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row;
			//echo $row->title;			
		}else{
			return false;
		}				
	}
}
	
