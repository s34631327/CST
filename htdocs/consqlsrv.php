<?php 
	try {
		$dsn = 'sqlsrv:server=.\SQLEXPRESS;Database=CST;';
		$user = 'sa';
		$password = 'a1234567';
		$pdo = new PDO($dsn,$user,$password);
	} 
	catch (PDOException $e) {
		echo json_encode('Error connecting to the server.');
		die ();
	}
?>