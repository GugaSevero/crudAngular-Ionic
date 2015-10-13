<?php
include_once("conexao.php");
$pdo = conectar();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id = $request->id;
$name = $request->name;
$email = $request->email;
$pass = $request->pass;

$atualUsuario=$pdo->prepare("UPDATE users SET name=:name, email=:email, pass=:pass WHERE id=:id");
$atualUsuario->bindValue(":name", $name);
$atualUsuario->bindValue(":email", $email);
$atualUsuario->bindValue(":pass", $pass);
$atualUsuario->bindValue(":id", $id);
$atualUsuario->execute();

?>