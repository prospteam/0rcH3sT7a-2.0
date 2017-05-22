<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends MY_Controller{
	function construct(){
		parent:: __construct();
	}
	
	public function index(){		
		$this->load->view('tickets/tickets_index_v');		
	}
}

?>