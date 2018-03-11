<?php 

/**
*  Base Controller
*/ 

class Controller 
{
	 protected $smarty = '';
	 protected $config = '';
	 protected $setTemplateDir = '../templates/';
	 protected $setCompileDir = '../templates_c/';
	 protected $setCacheDir = '../cache/';

	 public function __construct () {
	 	$this->config = require_once('../config/config.php');
	 	$this->smarty = new Smarty;
	 }

	 public function assign ($name = '', $params = '') {
	 	$this->smarty->assign($name, $params);
	 }

	 public function display ($files = 'home/home.html') {
		$this->smarty->setTemplateDir($this->setTemplateDir);
    	$this->smarty->setCompileDir($this->setCompileDir);
    	$this->smarty->setCacheDir($this->setCacheDir);
    	$this->smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
		$this->smarty->display($this->setTemplateDir . $files);
	 }

	 public function show404 ($files = 'error/404.html') {
	 	$this->smarty->display($this->setTemplateDir . $files);
	 }

	 public function config ($key = '', $value = '') {
	 	if (isset($key) && isset($value) && !empty($key) && !empty($value)) {
	 		return $this->config[$k] = $value;
	 	} elseif (isset($key) && !empty($key)) {
	 		return $this->config[$key];
	 	}
	 	return $this->config;
	 }
}