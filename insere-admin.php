<?php
include'conexao.php';

$descricao = $_GET['descricao'];

$query = "insert into assunto(descricao)value('{$descricao}')";
mysqli_query($conexao,$query);