<?php
namespace http;
use Illuminate\Support\Facades\Input;
/**
 * http模块，数据接收输出
 * @author zxc@384808348@.com
 */

class Laravel4{

	public static function get($key, $default = '')
	{
		return Input::get($key, $default);
	}
	
	public static function file($key, $default = '')
	{
		return Input::file($key, $default);
	}
}