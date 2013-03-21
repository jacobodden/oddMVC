<?php

class OddView {
	function __construct() {
	}

	public function render($view) {
		require('views/header.php');
		require('views/'.$view.'.view.php');
		require('views/footer.php');
	}
}
