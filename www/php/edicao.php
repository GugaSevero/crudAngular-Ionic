<?php
include_once("conexao.php");
$pdo = conectar();

$id = $_GET['id'];

$buscarUsuario=$pdo->prepare("SELECT * FROM users WHERE id=:id");
$buscarUsuario->bindValue(":id", $id);
$buscarUsuario->execute();

header('Content-Type: application/json');

$return = array();

while ($linha=$buscarUsuario->fetch(PDO::FETCH_ASSOC)) {
	array_push($return, $linha);
}

echo json_encode($return[0]);

?>