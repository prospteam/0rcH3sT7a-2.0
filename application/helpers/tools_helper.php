<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_user_type'))
{
    function get_user_type($type)
    {
        $typeArr = array(1 => 'Admin', 2 => 'Production', 3 => 'Marketing');        
        return $typeArr[$type];
    }
}

if ( ! function_exists('get_user_status')){
	function get_user_status($statusid, $userid){
		
		if($statusid == 1){
			$status = '<button type="button" uid="'.$userid.'" on="'.$statusid.'" class="btn btn-block btn-primary btn-sm updatestatus"><i class="fa fa-check"></i></button>';
		}else{
			$status = '<button type="button" uid="'.$userid.'" on="'.$statusid.'" class="btn btn-block btn-danger btn-sm updatestatus"><i class="fa fa-times"></i></button>';
		}		

		return $status;
	}
}

