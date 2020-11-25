<!DOCTYPE html>
<html>
<head>
	<title>Controle Solutudo</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="https://kit.fontawesome.com/69b4973427.js" crossorigin="anonymous"></script>
</head>

<body>
	<header class="">
		<div class="container">
			<a href="?pagina=home">
				<img src="https://static-cdn.soluall.net/2018/logos/color/sm/logo_solutudo.png"
					alt="Logo Solutudo 2018">
			</a>
			<div id="menu">
				<a href="?pagina=planos">Planos</a>
				<a href="?pagina=empresas">Empresas</a>
				<a href="?pagina=vendas">Vendas</a>
				<?php if(isset($_SESSION['login'])){ ?>
					<a href="logout.php">
						<?php echo $_SESSION['usuario']; ?> (sair)
					</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">
		