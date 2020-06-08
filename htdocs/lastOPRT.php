<?php 
	$sql = " SELECT * FROM tabletest";
	$pre = $pdo->prepare($sql);
	$pre->execute();
?>