<?php require_once("cabecalho.php");?>

		<h3>Adicionar Produto</h3>
		<form method="post" action="../controller/AddProdutoController.php">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome" required>
			</div>
			<div class="form-group">
				<label>Descrição</label>
				<input type="text" class="form-control" name="descricao" required>
			</div>
			<div class="form-group">
				<label>Preço</label>
				<input type="text" class="form-control" name="preco" required>
			</div>
			<button type="submit" class="btn btn-primary">Adicionar</button>
		</form>

<?php require_once("rodape.php");?>