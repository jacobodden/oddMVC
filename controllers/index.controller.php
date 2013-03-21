<?php

class Index extends OddController {
	function __construct() {
		parent::__construct();
		$this->view->render('index');
	}

	public function other() {
		require('models/index.model.php');
		$model = new Index_Model();
	}
}
