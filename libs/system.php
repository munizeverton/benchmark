<?php

class System{

	private $_url;
	private $_explode;
	public $_controller;
	public $_action;
	public $_params;

	public function __construct(){
		set_time_limit(0);
		$this->setUrl();
		$this->setExplode();
		$this->setController();
		$this->setAction();
		$this->setParams();
	}

	private function setUrl(){
		$_GET['url'] = isset($_GET['url']) ? $_GET['url']  : 'home/index';
		$this->_url = $_GET['url'];
	}

	private function setExplode(){
		$this->_explode = explode('/', $this->_url);
	}

	private function setController(){
		$this->_controller = $this->_explode[0] . 'Controller';
	}

	private function setAction(){
		$action = (!isset($this->_explode[1]) or ($this->_explode[1] == null)) ? 'index' : $this->_explode[1];
		$this->_action = $action;
	}

	private function setParams(){
		unset($this->_explode[0], $this->_explode[1]);
		
		if (end($this->_explode) == null)
				array_pop($this->_explode);
		
		$cont = 0;

		$ind = array();
		$value = array();

		if (!empty($this->_explode)){
			foreach ($this->_explode as $val) {
				if ($cont % 2 == 0){
					$ind[] = $val;
				}else{
					$value[] = $val;
				}
				$cont++;
			}
		}

		if ((count($ind) == count($value)) and (!empty($ind) and !empty($value)))
			$this->_params = array_combine($ind, $value);
		else
			$this->_params = array();
	}

	public function getParam($name = null){
		if ($name != null)
			return $this->_params[$name];
		else
			return $this->_params;
	}

	public function run(){
		$controller_path = CONTROLLERS . $this->_controller . '.php';

		if (!file_exists($controller_path))
			die('Houve um erro. O controller não existe');

		require_once($controller_path);
		$app = new $this->_controller;
		
		if (!method_exists($app, $this->_action))
			die('Houve um erro. A action não existe');

		$action = $this->_action;
		$app->$action();
	}

}