<?php

class Help extends OddController {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render('help');
	}
}
