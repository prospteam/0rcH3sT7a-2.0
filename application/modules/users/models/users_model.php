<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model{
	
	private $_usertbl = 'orc_users';

	function __construct(){
		parent:: __construct();
	}

	public function fetch_users($where = '', $wherevalue = ''){
		$this->db->select('user_id,user_fname,user_lname,user_email,user_contact,user_type,user_date_created,user_status');
		$this->db->from($this->_usertbl);
		
		if(!empty($where) && !empty($wherevalue)){
			$this->db->where($where, $wherevalue);
		}
		
		$this->db->order_by('user_date_created', 'DESC');
		$query = $this->db->get()->result_array();

		if($query){
			foreach($query as $key => $users){
				$query[$key]['user_date_created'] = date("M d, Y", strtotime($query[$key]['user_date_created']));
				$query[$key]['user_type'] 		  = get_user_type($query[$key]['user_type']);
				$query[$key]['user_status']	 	  = get_user_status($query[$key]['user_status'], $query[$key]['user_id']);
				$query[$key]['user_contact']      = (!empty($query[$key]['user_contact']) ? $query[$key]['user_contact'] : 'N/A');
			}

			return $query;
		}else{
			return 0;
		}
	}

	public function add_user($data){
		unset($data['confirm_password']);
		
		if($this->check_user_email($data['user_email'])){
			return 0;
		}else{
			$data['user_password'] 		= sha1($data['user_password']);
			$data['user_date_created']	= date('y-m-d H:i:s');

			$newuser 	= $this->db->insert($this->_usertbl, $data);
			$newuser_id = $this->db->insert_id();

			if($newuser){
				//$newuser_id
				$userbyid = $this->fetch_users('user_id', $newuser_id);
				return $userbyid;				
			}else{
				return 'Failed to add user';
			}
		}
	}

	public function check_user_email($email){
		$this->db->where('user_email',$email);
    	
    	$query = $this->db->get($this->_usertbl);
    	if ($query->num_rows() > 0){
        	return true;
    	}else{
        	return false;
    	}
	}

	public function update_user_status($id, $curstat){
		$this->db->set('user_status', $curstat);
		$this->db->where('user_id', $id);
		$this->db->update($this->_usertbl);

		return 1;
	}

}