<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('users_model');
		$data = array();
	}
	
	public function index(){
		$this->display('users/users_index_v');
	}

	public function add_user(){
		$data['msg']    = '';		

		$formdata = $this->input->post();
		
		foreach($formdata as $key => $val){
			if($key == 'user_contact') continue;

			if($key == 'email'){
				$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
			}elseif($key == 'confirm_password'){
				$this->form_validation->set_rules('confirm_password', 'Confirm password', 'trim|required|matches[user_password]');
			}else{
				$this->form_validation->set_rules($key, $key, 'trim|required');
			}
		}

		if($this->form_validation->run() == FALSE){
			foreach($formdata as $key => $value){
				$data['messages'][$key] = form_error($key);
			}
		}else{			
			//$data['msg'] = 'Success';
			$login = $this->users_model->add_user($formdata);
			$data['newuser']  = $login;
			$data['msg']	  = 'Success';
		}

		die(json_encode($data));
	}
}

?>