<?php

class Index extends OddController {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render('index');
	}

	public function other() {
		$this->view->render('index_other');
		require('models/index.model.php');
		$model = new Index_Model();
	}
}
