<b>LISTAR CADASTRO</b>

<?php
require_once 'controller/ControllerCadastro.php';

$controllerCadastro = new ControllerCadastro;

var_dump($controllerCadastro->listarCadastro());
?>