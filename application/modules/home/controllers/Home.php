<?php 
class Home extends MY_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		//echo 'Welcome to Orchestra 2.0!';
		$this->load->view('home');
	}
}

?>