<?php

class OddController {
	function __construct() {
		echo 'Inside OddController<br />';
		$this->OddView = new OddView();
	}

	public function render($view) {
		require('views/'.$view.'.view.php');
	}
}
