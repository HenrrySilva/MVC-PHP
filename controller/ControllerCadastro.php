<?php
require_once 'model/CadastroModel.php';

class ControllerCadastro extends CadastroModel{

	public function render($data = null){

		include_once "view/cadastro.php";
	}

	public function listarCadastro(){

		return $this->listCadastro();
	}
}