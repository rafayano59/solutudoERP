<?php

include 'db.php';

$nome_empresa = $_POST['nome_empresa'];
$telefone_empresa = $_POST['telefone_empresa'];
$endereco_empresa = $_POST['endereco_empresa'];
$email_empresa = $_POST['email_empresa'];
$estado_empresa = $_POST['estado_empresa'];
$cidade_empresa = $_POST['cidade_empresa'];

$query = "INSERT INTO EMPRESAS(nome_empresa, telefone_empresa, endereco_empresa,
			email_empresa, estado_empresa, cidade_empresa)
			VALUES('$nome_empresa', '$telefone_empresa', '$endereco_empresa',
			'$email_empresa', '$estado_empresa', '$cidade_empresa')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=empresas');
