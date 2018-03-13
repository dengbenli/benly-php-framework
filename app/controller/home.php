<?php
require_once('../app/modules/home.php');
require_once('../common/common.php');

class Home extends Controller
{
	public function index () {
		$model = new HomeModel ();
		$model->query();
		sayHello('commom.php');
		$data = 'wellcome to benly-php-framework ! __ by benly';
		$this->assign('data', $data);
		$this->display('home/home.html');
	}
}