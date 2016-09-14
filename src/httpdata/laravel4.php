<?php
namespace http;
/**
 * http模块，数据接收输出
 * @author zxc@384808348@.com
 */

class laravel4{

	public static function get($key, $default = '')
	{
		return Input::get($key, $default);
	}
	
	public static function file($key, $default = '')
	{
		return Input::file($key, $default);
	}
}