<?php 

class Produto{

	private $id;
	private $nome;
	private $descricao;
	private $valor;

	function getId(){
		return $this->id;
	}

	function getNome(){
		return $this->nome;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function getValor(){
		return $this->valor;
	}

	function setId($id){
		$this->id = $id;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setDescricao($desc){
		$this->descricao = $desc;
	}

	function setValor($valor){
		$this->valor = $valor;
	}
} 