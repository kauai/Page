<?php
include'conexao.php';

$id= $_GET['id'];
$descricao = $_GET['descricao'];

$query = "update assunto set descricao='{$descricao}' where id = {$id}";
$result = mysqli_query($conexao,$query);

//echo mysqli_affected_rows($conexao);
header('location: lista-artigos.php');
die();
