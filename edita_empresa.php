<?php

include 'db.php';

$id_empresa = $_POST['id_plano'];
$nome_empresa = $_POST['nome_empresa'];
$telefone_empresa = $_POST['telefone_empresa'];
$endereco_empresa = $_POST['endereco_empresa'];
$email_empresa = $_POST['email_empresa'];
$estado_empresa = $_POST['estado_empresa'];
$cidade_empresa = $_POST['cidade_empresa'];

$query = "UPDATE EMPRESAS
	SET nome_empresa='$nome_empresa',
	telefone_empresa=$telefone_empresa,
	endereco_empresa='$endereco_empresa',
	email_empresa='$email_empresa',
	estado_empresa='$estado_empresa',
	cidade_empresa='$cidade_empresa'
	WHERE id_empresa =$id_empresa";

mysqli_query($conexao, $query);

header('location:index.php?pagina=empresas');
