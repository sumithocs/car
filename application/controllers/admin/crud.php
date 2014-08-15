<?php if(!defined('BASEPATH')) exit ('No direct access');

class Crud extends  CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('makemodel');
		$this->load->model('vehiclemodel');
	}
	
	public function create_view(){
		$this->data['makes'] = $this->makemodel->get_all_makes();
		
		$this->load->view("admin/create",$this->data);
	}
	
	public function create(){
	
		//$post = $this->input->post('flImage');
		
		$config['upload_path'] = './assets/vehicle/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload("flImage");
		$data = $this->upload->data();
			
		
		$data = array(
				'makeid' => $this->input->post('cmbMake') ,
				'typeid' => 1 ,
				'image' => $data['file_name'],
				'negotiate' => $this->input->post('chkNego'),
				'price' => $this->input->post('txtPrice'),
		);
		
		$insert = $this->vehiclemodel->add_a_vehicle($data);
		var_dump($insert);
	}
	
	
	public function read(){
	
	
	}
	
	
	public function update(){
	
	
	}
	
	public function delete($id){
	
	
	}
}