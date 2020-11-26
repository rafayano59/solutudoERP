<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo plano</h1>
<form method="post" action="processa_plano.php">
	<br>
	<label>Nome do plano:</label>
	<input class="form-control" type="text" name="nome_plano" placeholder="Insira o nome do plano">
	<br>
	<label>Valor do plano:</label>
	<input class="form-control" type="number" name="valor_plano" placeholder="Insira o valor">
	<br>
	<input class="btn btn-primary" type="submit" value="Inserir plano">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_planos)){ ?>
		<?php if($linha['id_plano'] == $_GET['editar']){ ?>

			<h1>Editar plano</h1>
			<br>
			<form method="post" action="edita_plano.php">
				<input class="form-control" type="hidden" name="id_plano" value="<?php echo $linha['id_plano']; ?>"

				<label>Nome plano:</label>
				<input class="form-control" type="text" name="nome_plano" placeholder="Insira o nome do plano" value="<?php echo $linha['nome_plano']; ?>">
				<br>
				<label>Valor do plano:</label>
				<input class="form-control" type="number" name="valor_plano" placeholder="Insira o valor" value="<?php echo $linha['valor_plano']; ?>">
				<br>
				<input class="btn btn-primary" type="submit" value="Editar plano">
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>
