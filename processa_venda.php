<?php

include 'db.php';

$id_empresa = $_POST['escolha_empresa'];
$id_plano = $_POST['escolha_plano'];
$valor_plano = $_POST['valor_plano'];
$data_venda = $_POST['data_venda'];
$usuario = $_POST['usuario'];

$query = "INSERT INTO VENDAS(id_empresa, id_plano, valor_plano, data_venda, usuario) 
			VALUES($id_empresa, $id_plano, $valor_plano, '$data_venda', '$usuario')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=vendas');
