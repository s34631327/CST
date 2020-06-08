<?php session_start(); 
	if (!isset($_SESSION['username'])){
		echo "<script>alert('請先登入');</script>";
		echo '<script>window.location.href="http://localhost:8887"</script>';
	}
	else{
		$date = date("Y-m-d H:i:s");
		$acc = $_SESSION['acc'];
		$sql = "update account set lastOPRT = '$date' where acc = '$acc'";
		$pre = $pdo->prepare($sql);
		$pre->execute();
	}
?>