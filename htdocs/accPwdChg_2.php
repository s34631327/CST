<?php 
	include 'consqlsrv.php';
	include 'session.php';
	$pwd = $_POST["pwd"]; //原密碼
	$pwd2 = $_POST["pwd2"]; //新密碼
	$pwd3 = $_POST["pwd3"]; //再次輸入新密碼
	$acc = $_SESSION['acc'];
	$pwd4 = $_SESSION['pwd']; //使用者真正密碼
	
	
	if ($pwd == $pwd4){
		if ($pwd2 == $pwd3){
			$_SESSION['pwd'] = $pwd2;
			$sql = "update account set pwd = '$pwd2' where acc = '$acc'";
			$pre = $pdo->prepare($sql);
			$pre->execute();
			echo '修改成功';
		}
		else{
			echo '密碼輸入不同';
		}
	}
	else{
		echo '原密碼輸入有誤';
	}
?>
