<?php
require_once('../app/modules/home.php');
class Home extends Controller
{
	public function index () {
		$model = new HomeModel ();
		$model->query();
		$data = 'wellcome to benly-php-framework ! __ by benly';
		$this->assign('data', $data);
		$this->display('home/home.html');
	}
}