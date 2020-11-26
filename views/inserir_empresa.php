<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir nova empresa</h1>
<form method="post" action="processa_empresa.php">
	<br>
	<label>Nome empresa:</label>
	<input class="form-control" type="text" name="nome_empresa" placeholder="Insira o nome da empresa">
	<br>
	<label>Telefone:</label>
	<input class="form-control" type="tel" name="telefone_empresa" placeholder="Insira o telefone">
	<br>
	<label>Endereço:</label>
	<input class="form-control" type="text" name="endereco_empresa" placeholder="Insira o endereço">
	<br>
	<label>E-mail:</label>
	<input class="form-control" type="email" name="email_empresa" placeholder="Insira o e-mail">
	<br>
	<label>Estado:</label>
	<input class="form-control" type="text" name="estado_empresa" placeholder="Insira o estado">
	<br>
	<label>Cidade:</label>
	<input class="form-control" type="text" name="cidade_empresa" placeholder="Insira a cidade">
	<br>
	<input class="btn btn-primary" type="submit" value="Inserir empresa">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_empresas)){ ?>
		<?php if($linha['id_empresa'] == $_GET['editar']){ ?>

			<h1>Editar empresa</h1>
			<br>
			<form method="post" action="edita_empresa.php">
				<input class="form-control" type="hidden" name="id_empresa" value="<?php echo $linha['id_empresa']; ?>">
				<label>Nome empresa:</label>
				<input class="form-control" type="text" name="nome_empresa" placeholder="Insira o nome da empresa" 
					value="<?php echo $linha['nome_empresa']; ?>">
				<br>
				<label>Telefone:</label>
				<input class="form-control" type="tel" name="telefone_empresa" placeholder="Insira o telefone"
					value="<?php echo $linha['telefone_empresa']; ?>">
				<br>
				<label>Endereço:</label>
				<input class="form-control" type="text" name="endereco_empresa" placeholder="Insira o endereço"
					value="<?php echo $linha['endereco_empresa']; ?>">
				<br>
				<label>E-mail:</label>
				<input class="form-control" type="email" name="email_empresa" placeholder="Insira o e-mail"
					value="<?php echo $linha['email_empresa']; ?>">
				<br>
				<label>Estado:</label>
				<input class="form-control" type="text" name="estado_empresa" placeholder="Insira o estado"
					value="<?php echo $linha['estado_empresa']; ?>">
				<br>
				<label>Cidade:</label>
				<input class="form-control" type="text" name="cidade_empresa" placeholder="Insira a cidade"
					value="<?php echo $linha['cidade_empresa']; ?>">
				<br>
				<input class="btn btn-primary" type="submit" value="Editar empresa">
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>
