<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('authmodel');
	}
	
	public function index()
	{	
		$logged_in = $this->session->userdata('logged_in');	
		if($logged_in){
			redirect('/admin/dashboard/','refresh');
		}else{
			$this->load->view('admin/index');
		}
	}
	
}

