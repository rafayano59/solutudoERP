<h1 style="">Sistema de Gestão de Vendas</h1>

<br>

<form method="post" action="login.php">
	<label>Login:</label>
	<input class="form-control" type="text" name="usuario" placeholder="Nome do usuário">
	<br>
	<label>Senha:</label>
	<input class="form-control" type="password" name="senha" placeholder="Digite a senha">
	<br>
	<input type="submit" value="Entrar" class="btn btn-primary">
</form>

<br>

<?php if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos!
	</div>
<?php } ?>
