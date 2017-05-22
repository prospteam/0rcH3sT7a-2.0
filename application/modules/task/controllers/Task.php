<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Task extends MY_Controller{	
	function __construct(){
		parent::__construct();
		$data = array();
	}

	function index(){		
		$this->display('task/task', @$data);
	}
}
?>