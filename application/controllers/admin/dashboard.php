<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('authmodel');
	}
	
	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
		if($logged_in){
			$this->load->view('admin/dashboard');
		}else{
			$this->session->set_flashdata('msg', 'Please Login');
			redirect('/admin/login/','refresh');
		}
		
		
	}
	
}
