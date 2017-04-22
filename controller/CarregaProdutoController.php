<!DOCTYPE html>
<html>
<head>
	<title>CRUD - MVC</title>
	<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../view/index.php"><span class="glyphicon glyphicon-shopping-cart"></span> </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="../view/adiciona-produto.php"> <span class="glyphicon glyphicon-plus"></span> Adicionar Produto</a></li>
					<li><a href="../view/index.php"> <span class="glyphicon glyphicon-th-list"></span> Lista de Produtos</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<h1 class="text-center">CRUD MVC</h1>

		<?php 
		require_once("../model/Produto.php");
		require_once("../model/ProdutoDAO.php");
		require_once("../config/Conexao.php");


		$c = new Conexao();
		$p = new Produto();
		$pdao = new ProdutoDAO($c);

		$p->setId($_POST["id"]);

		$prodResultado = $pdao->buscaProduto($p);

		$p->setNome($prodResultado['nome']);
		$p->setValor($prodResultado['valor']);
		$p->setDescricao($prodResultado['descricao']);?>



		<h3>Atualiza Produto</h3>
		<form method="post" action="UpdProdutoController.php">,
			<input type="hidden" name="id" value="<?=$p->getId()?>">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome" required value="<?=$p->getNome()?>">
			</div>
			<div class="form-group">
				<label>Descrição</label>
				<input type="text" class="form-control" name="descricao" required value="<?=$p->getDescricao()?>">
			</div>
			<div class="form-group">
				<label>Preço</label>
				<input type="text" class="form-control" name="preco" required value="<?=$p->getValor()?>">
			</div>
			<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>

	</div>
</body>

<script src="../view/js/jquery-3.1.1.min.js"></script>
<script src="../view/js/bootstrap.min.js"></script>

</html>