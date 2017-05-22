<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_user_type'))
{
    function get_user_type($type)
    {
        $typeArr = array(1 => 'Admin', 2 => 'Production', 3 => 'Marketing');        
        return $typeArr[$type];
    }
}