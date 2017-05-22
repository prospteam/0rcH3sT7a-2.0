<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model{
	
	private $_usertbl = 'orc_users';

	function __construct(){
		parent:: __construct();
	}

	function add_user($data){
		unset($data['confirm_password']);

		$data['user_password'] 		= sha1($data['user_password']);
		$data['user_date_created']	= date('y-m-d');

		$newuser 	= $this->db->insert($this->_usertbl, $data);
		$newuser_id = $this->db->insert_id();

		if($newuser){
			//$newuser_id
			$this->db->select('user_id,user_fname,user_lname,user_email,user_contact,user_type,user_date_created,user_status');
			$this->db->from($this->_usertbl);
			$this->db->where('user_id', $newuser_id);
			$this->db->order_by('user_date_created', 'ASC');
			$query = $this->db->get()->result_array();
			if($query){
				$query[0]['user_date_created'] = date("M d, Y", strtotime($query[0]['user_date_created']));
				$query[0]['user_type'] = get_user_type($query[0]['user_type']);
				return $query;	
			}else{
				return 0;
			}
			

		}else{
			return 'Failed to add user';
		}
		
	}
}