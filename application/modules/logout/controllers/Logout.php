<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller{
	function __construct(){
		parent:: __construct();							
	}

	public function index(){
		unset($_POST);
		unset($_SESSION);
		session_destroy();
		redirect('/');
	}
}

?>