<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends MY_Controller{
	function construct(){
		parent:: __construct();
	}
	
	public function index(){
		$this->load->view('tracker/tracker_index_v');		
	}
}

?>