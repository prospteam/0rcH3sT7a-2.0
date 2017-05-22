<?php 
Class Template extends MX_Controller{
	function __construct(){
		parent::__construct();		
	}

	function admin_header_template($data = NULL){
		$this->load->view('template/header_v', $data);
	}

	function admin_sidebar_template($data = NULL){
		$data['parentpage'] = $this->uri->segment(1);
		$data['childpage'] = $this->uri->segment(2);
		$this->load->view('template/sidebar_v', $data);
	}

	function dynamic_content($data){
		$data2 = array('a' => 53545);
		$this->load->view($data, $data2);
	}

	function admin_footer_template($data = NULL){
		$this->load->view('template/footer_v', $data);	
	}


}