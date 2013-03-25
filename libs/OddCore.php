<?php

class OddCore {

	function __construct() {
		$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : null;
		$url = explode('/', $url);

		if(empty($url[0])) {
			require('controllers/index.controller.php');
			$controller = new Index();
			$controller->index();
			return false;
		}

		$file = 'controllers/'.$url[0].'.controller.php';
		if(file_exists($file)) {
			require($file);
		} else {
			$this->error();
			return false;
		}

		$controller = new $url[0];

		// calling methods
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {
				$controller->index();
			}
		}
	}

	function error() {
		require('controllers/error.controller.php');
		$controller = new Error();
		$controller->index();
		return false;
	}

}
