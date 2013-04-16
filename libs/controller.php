<?php
	class Controller{
		public function microtimeFloat(){
			list($usec, $sec) = explode(" ", microtime()); 
    		return ((float)$usec + (float)$sec);
    	}

    	public function view($view, $vars = null){
    		$loader = new Twig_Loader_Filesystem(VIEWS);
			$twig = new Twig_Environment($loader, array(
			    'cache' => 'libs/cache',
			    'charset' => 'utf-8'
			));
			$twig->getExtension('core')->setNumberFormat(2, '.', '');					
			
			$vars = $vars == null ? array() : $vars; 

			echo $twig->render($view.'.view.php', $vars);
    	}
	}