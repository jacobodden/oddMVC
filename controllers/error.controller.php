<?php

class Error extends OddController {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->render('error');
	}
}
