<?php

include 'db.php';

$id_empresa = $_GET['id_empresa'];

$query = "DELETE FROM EMPRESAS WHERE ID_EMPRESA = $id_empresa";

mysqli_query($conexao, $query);

header('location:index.php?pagina=empresas');
