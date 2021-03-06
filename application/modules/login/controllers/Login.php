<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
	function __construct(){
		parent:: __construct();			
		$this->load->model('login_model');		
	}

	public function index(){
 		$this->login_user();
	}

	public function login_user(){				

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	 		$formdata = $this->input->post();
	 		
	 		foreach($formdata as $key => $val){
	 			$this->form_validation->set_rules($key, $key, 'trim|required');
	 		}

	 		if($this->form_validation->run() == FALSE){
	 			$data['msg'] = '<div class="alert alert-warning login-error">
                		<h4><i class="icon fa fa-warning"></i> Must fill in form</h4>
              		</div>';
	 		}else{
	 			$login = $this->login_model->user_login($formdata);
	 			if($login){
 					//$login returns user_id, user_email, user_password, user_level, user_status
	 				//$data['msg'] = 'success msg here';

	 				//build menu per user level
	 				$usertabs = $this->login_model->user_tabs($login->user_level);
	 				$mytabs   = $this->buildTree($usertabs);
	 				
	 				$sessiondata = array(
	 					'user_id' 	=> $login->user_id,
	 					'user_name' => $login->user_firstname.' '.$login->user_lastname,
	 					'user_level'=> $login->user_level,
	 					'user_menu' => $mytabs,
	 					'user_lifespan' => $login->user_lifespan,	 					
	 					'user_loggedin' => TRUE
	 				);

	 				$this->session->set_userdata('userdata', $sessiondata); // sessionize data
	 				redirect(base_url("dashboard"));
	 			}else{	 	
	 				$data['email'] = (!empty($_POST['user_email']) ? $_POST['user_email'] : '');
	 				$data['msg']   = '<div class="alert alert-danger login-error">
                		<h4><i class="icon fa fa-ban"></i> Invalid Email and/or Password!</h4>
              		</div>';              		
	 			}
	 		}
	 		
	 	}

	 	$this->load->view('login/login', @$data);
	}

	public function buildTree(array $elements, $parentId = 0){
		$branch = array();

		foreach($elements as $element){
			if($element['tab_parent'] == $parentId){
				$children = $this->buildTree($elements, $element['tab_id']);
				if($children){
					$element['children'] = $children;
				}
				$branch[] = $element;
			}
		}

		return $branch;
	}

}