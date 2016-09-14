<?php
namespace http;
/**
 * http模块，数据接收输出
 * @author zxc@384808348@.com
 */

class Http{
	
	private $http_class = 'Protogenesis';
	/**
	 * 初始化框架配置，是使用某种框架进行的，目前支持laravel4以及原生的数据获取
	 * 默认使用原生配置
	 */
	public function __construct($http_class = 'Protogenesis')
	{
		$this->http_class = 'http\\' . $http_class;    
	}
	
	/**
	 * 获取http的数据
	 */
	public function get($key, $default = '')
	{
		$class = $this->http_class;
	    return $class::get($key, $default = '');
	}
	
	/**
	 * 获取http文件流的数据
	 */
	public function file($key, $default = '')
	{
		$class = $this->http_class;
		return $class::file($key, $default = '');
	}
	
	/**
	 * 静态魔术方法
	 */
	public static function __callstatic($method, $arg)
	{
		return call_user_func_array([$this, $method], $arg);
	}
}
?>