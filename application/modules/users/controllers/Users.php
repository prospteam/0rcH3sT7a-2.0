<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('users_model');
		$data = array();
	}
	
	public function index(){
		$users = $this->users_model->fetch_users();
		$data['users'] = $users;
		$this->display('users/users_index_v', $data);
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
			$login = $this->users_model->add_user($formdata);
			
			if($login == 0 || $login == '0'){
				$data['messages'][0] = 'Email Already Exists.';
			}else{
				$data['newuser']  = $login;
				$data['msg']	  = 'Success';
			}			
		}

		die(json_encode($data));
	}

	public function update_user_status($id, $currstat){
		$curstat = ($currstat == 1 ? 0 : 1);
		$updated = $this->users_model->update_user_status($id, $curstat);
		
		//$newstatus = ($updated == 1 ? 'btn-primary' : 'btn-danger');
		die(json_encode($updated));
	}
}

?>