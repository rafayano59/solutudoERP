<?php

include 'db.php';

$id_venda = $_GET['id_venda'];

$query = "DELETE FROM VENDAS WHERE id_venda = $id_venda";

mysqli_query($conexao, $query);

header('location:index.php?pagina=vendas');
