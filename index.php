<?php
// TODO: use an auto loader for this stuff

// Load libs
require('libs/OddCore.php');
require('libs/OddController.php');
require('libs/OddView.php');
require('libs/OddModel.php');

// Load configs
require('config/routes.php');
require('config/database.php');

$app = new OddCore();
