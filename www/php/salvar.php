<?php
include_once("conexao.php");
$pdo = conectar();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$nome = $request->nome;
$email = $request->email;
$pass = $request->pass;

$insereUsuario=$pdo->prepare("INSERT INTO users (id, name, email, pass) VALUES (?, ?, ?, ?)");
$insereUsuario->bindValue(1, NULL); 
$insereUsuario->bindValue(2, $nome); 
$insereUsuario->bindValue(3, $email); 
$insereUsuario->bindValue(4, $pass);

$insereUsuario->execute();

?>