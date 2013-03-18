<?php

class oddMVC_init {

	function __construct() {
		$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : 'index';
		$url = explode('/', $url);

		$file = 'controllers/'.$url[0].'.controller.php';
		if(file_exists($file)) require($file);
		else throw new Exception('File: '.$file.' does not exist.');

		$controller = new $url[0];

		if(isset($url[2])){
			$controller->$url[1]($url[2]);
		} else if (isset($url[1])){
			$controller->$url[1]();
		}
	}

}
