<?php 
class MY_Controller extends MX_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->module('Template');
		$data = array();		
	}

	public function display($body, $data = array()){
		//user_id, user_name, user_level, user_menu, user_lifespan, user_loggedin
		$sessiondata = $this->session->userdata('userdata');
		if($sessiondata['user_loggedin']){
			$data['user_name'] = $sessiondata['user_name'];
			$data['user_menu'] = $sessiondata['user_menu'];
			
			if(!empty($sessiondata['user_lifespan']) && $sessiondata['user_lifespan'] > 0){
				$this->force_logout($sessiondata['user_lifespan']);
			}

			$this->template->admin_header_template();
			$this->template->admin_sidebar_template($data);
			$this->template->dynamic_content($body, $data);
			$this->template->admin_footer_template();
		}else{
			redirect(base_url("login"));	
		}
	}

	public function check_loggedin($logstatus){
		if($logstatus){
			return true;
		}else{
			return false;
		}
	}

	public function force_logout( $lifetime){
		// inactive in seconds
		$inactive = $lifetime;
		if( !isset($_SESSION['timeout']) )
		$_SESSION['timeout'] = time() + $inactive; 

		$session_life = time() - $_SESSION['timeout'];

		if($session_life > $inactive){  			
			session_destroy(); 
			redirect(base_url("login"));
		}

		$_SESSION['timeout'] = time();
	}	
}

?>