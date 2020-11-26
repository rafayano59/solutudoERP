<h1>Inserir nova venda</h1>


<form method="post" action="processa_venda.php">
	<br>
	<label>Selecione o empresa</label>
	<select class="form-control" name="escolha_empresa">
		<option>Selecione uma empresa</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_empresas)){
			echo '<option value="'.$linha['id_empresa'].'">'.$linha['nome_empresa'].'</option>';
		}
		?>
	</select>
	<br>
	<label>Selecione o plano</label>
	<select class="form-control" name="escolha_plano">
		<option>Selecione um plano</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_planos)){
			echo '<option value="'.$linha['id_plano'].'">'.$linha['nome_plano'].'</option>';
		}
		?>
	</select>
	<input class="form-control" type="hidden" name="valor_plano" value="<?php $linha['valor_plano']; ?>">
	<br>
	<label>Selecione o usuário</label>
		<select class="form-control" name="usuario">
			<option value="<?php $_SESSION['usuario']; ?>"> <?php echo $_SESSION['usuario']; ?></option>
		</select>
	<br>
	<label>Data da venda:</label>
	<input class="form-control" type="date" name="data_venda" placeholder="Insira o valor">
	<br>
	<input class="btn btn-primary" type="submit" value="Inserir venda">


</form>