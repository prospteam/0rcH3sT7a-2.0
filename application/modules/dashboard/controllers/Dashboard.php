<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
	function __construct(){
		parent::__construct();
		$data = array();
	}

	public function index(){
		$this->display('dashboard/dashboard', @$data);		
	}

	public function addclient(){
		$this->display('dashboard/dashboard', @$data);		
	}
}

?>