<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = "";
$db = "solutudo_db";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM PLANOS";
$consulta_planos = mysqli_query($conexao, $query);

$query = "SELECT * FROM EMPRESAS";
$consulta_empresas = mysqli_query($conexao, $query);

$query = "SELECT vendas.id_venda, empresas.nome_empresa, planos.nome_plano, planos.valor_plano
			FROM EMPRESAS, PLANOS, VENDAS
			WHERE vendas.id_empresa = empresas.id_empresa
			AND vendas.id_plano = planos.id_plano";
$consulta_vendas = mysqli_query($conexao, $query);

