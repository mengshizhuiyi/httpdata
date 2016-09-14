<?php
namespace http;

/**
 * http模块，数据接收输出
 * @author zxc@384808348@.com
 */

class protogenesis{

	public static function get($key, $default = '')
	{
		$val = $default;
		if(isset($_GET[$key]))
		{
		    $val = $_GET[$key];
		}
		if(isset($_POST[$key]))
		{
		    $val = $_POST[$key];
		}
		return $val;
	}
	
	public static function file($key, $default = '')
	{
		$val = $default;
		if(isset($_FILES[$key]))
		{
			$val = $_FILES[$key];
		}
		return $val;
	}

	
}