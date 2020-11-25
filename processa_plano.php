<?php

include 'db.php';

$nome_plano = $_POST['nome_plano'];
$valor_plano = $_POST['valor_plano'];

$query = "INSERT INTO PLANOS(nome_plano, valor_plano)
			VALUES('$nome_plano', $valor_plano)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=planos');
