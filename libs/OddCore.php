<?php

class OddCore {

	function __construct() {
		$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : 'index';
		$url = explode('/', $url);

		$file = 'controllers/'.$url[0].'.controller.php';
		if(file_exists($file)) require($file);
		else {
			$url[0] = 'error';
			require('controllers/'.$url[0].'.controller.php');
		}

		$controller = new $url[0];

		if(isset($url[2])) {
			$controller->$url[1]($url[2]);
		} else if (isset($url[1])) {
			$controller->$url[1]();
		}
	}

}
