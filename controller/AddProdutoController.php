<?php 
require_once("../model/Produto.php");
require_once("../config/Conexao.php");
require_once("../model/ProdutoDAO.php");

 $p = new Produto();
 $c = new Conexao();
 $pDao = new ProdutoDAO($c);

$p->setNome($_POST["nome"]);
$p->setValor($_POST["preco"]);
$p->setDescricao($_POST["descricao"]);

if($pDao->adicionar($p)){
	header('Location:../view/index.php');
 	die();
}else{
	echo "Erro".mysqli_error($c->getConexao());}

