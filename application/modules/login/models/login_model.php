<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model{
	
	private $_table = 'orc_usersTEST';

	function __construct(){
		parent:: __construct();
	}

	public function user_login($data){		
		$data['user_status'] = 1; //add user_status to the array ($data)
		$this->db->where($data);
		$login = $this->db->get($this->_table)->row();
		return $login;
	}

	public function user_tabs($userlevel){
		$this->db->select('*');
		$this->db->where(array('tab_status' => 1));
		$this->db->like('tab_permission', $userlevel);
		$this->db->from('orc_tabs');

		return $this->db->get()->result_array();
	}
}