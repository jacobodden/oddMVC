<?php

class Help extends OddController {
	function __construct() {
		parent::__construct();
		$this->view->render('help');
	}
}
