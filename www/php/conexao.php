<?php

function conectar(){
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "appAngularDB";
	
	try {
		$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$pdo = new PDO("mysql:host=localhost;dbname=angularDB;", "root", "root", $opcoes);
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	return $pdo;

}

?>