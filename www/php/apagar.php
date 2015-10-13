<?php

include_once("conexao.php");
$pdo = conectar();

$id = $_GET['id'];

$deletarUsuario=$pdo->prepare("DELETE FROM users WHERE id=:id");
$deletarUsuario->bindValue(":id", $id);
$deletarUsuario->execute();

?>