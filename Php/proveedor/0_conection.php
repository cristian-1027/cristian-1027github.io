<?php
	try {
		$hostname = "localhost";
		$dbname = "Inventario";
		$username = "postgres";
		$pw = "cristian1027";
		$db = new PDO('pgsql:host='.$hostname.';dbname='.$dbname.'', $username, $pw);
		
		//pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
		//$db = pg_connect("host=$hostname port=5432 dbname=$dbname user=$username password=$pw");

	} catch (PDOException $ex) {
		echo "Error al conectar a la base de datos: " . $ex->getMessage() . "\n";
		exit;
	}

?>