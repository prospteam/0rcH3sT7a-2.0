<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MY_Controller{
	function construct(){
		parent:: __construct();
		$data = array();		
	}
	
	public function index(){		
		$this->display('clients/clients', @$data);	
	}

	public function addclient(){
		$this->display('clients/clients', @$data);	
	}
}

?>