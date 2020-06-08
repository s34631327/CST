<?php 
	include 'consqlsrv.php';
	include 'session.php';
	
	$accDel = $_POST['accDel'];
	
	$sql = "delete from account where acc = '$accDel'";
	$pre = $pdo->prepare($sql);
	$pre->execute();
	echo '刪除成功';
?>