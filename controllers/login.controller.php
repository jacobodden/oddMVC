<?php

class Login extends OddController {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render('login');
	}

	public function other() {
		require('models/login.model.php');
		$model = new Login_Model();
	}
}
