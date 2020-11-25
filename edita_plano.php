<?php

include 'db.php';

$id_plano = $_POST['id_plano'];
$nome_plano = $_POST['nome_plano'];
$valor_plano = $_POST['valor_plano'];

$query = "UPDATE PLANOS
	SET nome_plano='$nome_plano', valor_plano=$valor_plano
	WHERE id_plano = $id_plano";

mysqli_query($conexao, $query);

header('location:index.php?pagina=planos');
