<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('searchmodel');
	}
	
	public function index()
	{		
		$search_data = $this->searchmodel->get_all_active_vehicles();
		$this->data['vehicles'] = $search_data;
		$this->load->view('buy/search', $this->data);
	}
	
}
