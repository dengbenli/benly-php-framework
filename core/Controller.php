<?php 

/**
*  Base Controller
*/
class Controller 
{
	 protected $smarty = '';
	 protected $setTemplateDir = '';
	 protected $setCompileDir = '';
	 protected $setCacheDir = '';

	 public function __construct () {
	 	require_once('../vendor/autoload.php');
	 	$this->smarty = new Smarty;
	 }

	 public function assign ($name = '', $params = '') {
	 	$this->smarty->assign($name, $params);
	 }

	 public function display ($files = 'home/home.html') {
		$this->smarty->setTemplateDir('../templates/');
    	$this->smarty->setCompileDir('../templates_c/');
    	$this->smarty->setCacheDir('../cache/');
    	$this->smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
		$this->smarty->display('../templates/' . $files);
	 }
}