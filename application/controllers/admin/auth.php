<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends  CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin/authmodel');
	}
	
	public function login()
	{
		$email = $this->input->post('txtEmail');
		$pwd = $this->input->post('txtPassword');
		$login = $this->authmodel->login($email,$pwd);
		if(isset($login) && !empty($login)){
			$newdata = array(
				'adminid'  => $login->adminid,
				'name'  => $login->name,				
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('/admin/dashboard/', 'refresh');
		}else{
			$this->session->set_flashdata('msg', 'Login Failed');
			redirect('/admin/login/', 'refresh');
		}
	}
}