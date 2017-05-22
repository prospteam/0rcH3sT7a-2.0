<?php 
class Endev extends MX_Controller{
	function __construct(){
		parent::__construct();		
	}

	public function index(){
		$this->session->sess_destroy();	
		redirect(base_url("login"));
	}
}
		
?>