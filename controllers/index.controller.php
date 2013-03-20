<?php

class Index extends OddController {
	function __construct() {
		parent::__construct();
		echo 'We are in the index controller<br />';
	}

	public function other() {
		echo 'We\'ve called the other function<br />';
	}
}
