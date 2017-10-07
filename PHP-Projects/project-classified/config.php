<?php 
session_start();

global $pdo;

try {
	$dsn = "mysql:dbname=classificados;host=localhost:3307";
	$dbuser = "root";
	$dbpass = "";

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
} catch (PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
}

?>