<?php
namespace http;
/**
 * http模块，数据接收输出
 * @author zxc@384808348@.com
 */

class Http{
	
	const HTTP_CLASS = 'http\Protogenesis';
	
	/**
	 * 获取http的数据
	 */
	public static function get($key, $default = '')
	{
		$class = self::HTTP_CLASS;
	    return $class::get($key, $default = '');
	}
	
	/**
	 * 获取http文件流的数据
	 */
	public static function file($key, $default = '')
	{
		$class = self::HTTP_CLASS;
		return $class::file($key, $default = '');
	}
	
	
}
?>