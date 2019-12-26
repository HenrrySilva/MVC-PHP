<?php

class Core{

	/**
	*
	* @return String pag
	*
	*/
	public function run() :void{
		switch ($_GET['url']) {
			case 'cadastro':
			    require_once 'controller/ControllerCadastro.php';
				$c = new ControllerCadastro;
				$c->render();
				break;

			case 'home':
			    require_once 'controller/ControllerHome.php';
				$c = new ControllerHome;
				$c->render();
				break;

			default:
			    require_once 'controller/ControllerHome.php';
				$c = new ControllerHome;
				$c->render();
				break;
		}
	}


}