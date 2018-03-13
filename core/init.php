<?php 
// conposer aotoloader 
require_once('../vendor/autoload.php');
// init databases config 
require_once('../config/databases.php');
// init app
require_once('../core/App.php');
// init controller
require_once('../core/Controller.php');
// init Mysql
require_once('../core/Mysql.php');
// init Model
require_once('../core/Model.php');

// init class app
$app = new App;
// init class mysql
$mysql = new Mysql(
	$databases['host'], 
	$databases['username'], 
	$databases['password'], 
	$databases['database'], 
	$databases['port'],
	$databases['charset']
);