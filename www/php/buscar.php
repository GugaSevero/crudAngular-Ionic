<?php
include_once("conexao.php");
$pdo = conectar();

$buscarUsuario=$pdo->prepare("SELECT * FROM users");
$buscarUsuario->execute();

header('Content-Type: application/json');

$return = array();

while ($linha=$buscarUsuario->fetch(PDO::FETCH_ASSOC)) {
	array_push($return, $linha);
}

echo json_encode($return);

?>