<?php

include 'db.php';

$id_plano = $_GET['id_plano'];

$query = "DELETE FROM PLANOS WHERE id_plano = $id_plano";

mysqli_query($conexao, $query);

header('location:index.php?pagina=planos');
