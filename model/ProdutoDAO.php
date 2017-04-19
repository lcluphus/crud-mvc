<?php 
require_once('Produto.php');
require_once('../config/Conexao.php');

class ProdutoDAO{

	private $db;
	
	public function ProdutoDAO(Conexao $db){
		$this->db = $db;
	}

	public function adicionar(Produto $produto){
		$nome = $produto->getNome();
		$valor = $produto->getValor();
		$descricao = $produto->getDescricao();

		$query = "INSERT INTO produtos(nome,valor,descricao) VALUES('{$nome}','{$valor}','{$descricao}')";

		return mysqli_query($this->db->getConexao(),$query);
	}

	public function atualizar(Produto $produto){
		$id = $produto->getId();
		$nome = $produto->getNome();
		$valor = $produto->getValor();
		$descricao = $produto->getDescricao();
		$query  = "UPDATE produtos set nome='{$nome}',valor={$valor},descricao={descricao} WHERE id={$id}";
		mysqli_query($this->db->getConexao(),$query);
	} 

	public function excluir(Produto $produto){
		$id = $produto->getId();

		$query = "DELETE FROM produtos WHERE id ={$id}";
		return mysqli_query($this->db->getConexao(),$query);
	}

	public function buscaProduto(Produto $produto){

		$id = $produto->getId();
		$query = "select * from produtos where id= {$id}";
		$resultado = mysqli_query($this->db->getConexao(),$query);
		return mysqli_fetch_assoc($resultado);
	}

	public function listar(){

		$listaDeProdutos = array();

		$query = "select * from produtos";
		$resultado = mysqli_query($this->db->getConexao(),$query);

		while($produto = mysqli_fetch_assoc($resultado)){
			
			array_push($listaDeProdutos, $produto);

		}

		return $listaDeProdutos;
	}

}