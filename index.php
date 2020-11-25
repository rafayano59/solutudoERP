<?php

# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'vendas';
	};
}
else{
	$pagina = 'home';
};

switch($pagina){
	case 'planos': include 'views/planos.php'; break;
	case 'inserir_plano': include 'views/inserir_plano.php'; break;
	case 'empresas': include 'views/empresas.php'; break;
	case 'inserir_empresa': include 'views/inserir_empresa.php'; break;
	case 'vendas': include 'views/vendas.php'; break;
	case 'inserir_venda': include 'views/inserir_venda.php'; break;
	default: include 'views/home.php'; break;
};

# Rodapé
include 'footer.php';
