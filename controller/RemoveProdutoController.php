<?php 

require_once("../model/Produto.php");
require_once("../model/ProdutoDAO.php");
require_once("../config/Conexao.php");

$p = new Produto();
$p->setId($_POST["id"]);

$c = new Conexao();

$pdao = new ProdutoDAO($c);

if($pdao->excluir($p)){
	header("Location:../view/index.php");
	die();
}else{
	echo "Erro";
}