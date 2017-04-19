<?php
	 require_once("../config/Conexao.php");
	 require_once("../model/ProdutoDAO.php");
 ?>
<table class="table table-striped table-bordered table-condensed ">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Preço</th>
					<th>Descrição</th>
					<th>Alterar</th>
					<th>Excluir</th>
				</tr>
			</thead>	

			<?php

			$c = new Conexao();
			$pDao = new ProdutoDAO($c);
			$produtos = $pDao->listar();

			foreach ($produtos as $produto) :
			?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td>R$ <?=$produto['valor']?></td>
				<td><?= substr($produto['descricao'],0,40)?></td>
				<td>
					<form action="../controller/CarregaProdutoController.php" method="POST">
						<input type="hidden" name="id" value="<?= $produto['id']?>">
						<button class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-edit" aria-hidden="true"></span></button>
					</form>
				</td>
				<td>
					<form action="../controller/RemoveProdutoController.php" method="POST">
						<input type="hidden" name="id" value="<?= $produto['id']?>">
						<button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span></button>
					</form>
				</td>
			</tr>


			<?php	
			endforeach
			?>


		</table>
