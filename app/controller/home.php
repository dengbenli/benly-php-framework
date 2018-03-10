<?php

class Home extends Controller
{
	public function index () {
		$data = 'wellcome to benly-php-framework ! __ by benly';
		$this->assign('data', $data);
		$this->display('home/home.html');
	}
}