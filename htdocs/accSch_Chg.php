<?php 
	include 'consqlsrv.php';
	include 'session.php';
	
	$acc1 = $_POST['acc1'];
	$acc = $_POST['acc'];
	$pwd = $_POST['pwd'];
	$namea = $_POST['namea'];
	$dpm = $_POST['dpm'];
	$date = date("Y-m-d H:i:s");
	$user = $_SESSION['username'];
	
	if ($acc1 === $acc){ //無修改帳號
		$sql = "update account set pwd = '$pwd', namea = '$namea', dpm = '$dpm',timea_2 = '$date',worker_2 = '$user' where acc = '$acc1'";
		$pre = $pdo->prepare($sql);
		$pre->execute();
		echo '修改成功';
	}
	else{ //有修改帳號
		$sql = "select acc from account where acc = '$acc'";
		$pre = $pdo->prepare($sql);
		$pre->execute();
		if(is_array($pre->fetch())){
			echo '修改失敗,帳號重複';
		}
		else{
			$sql = "update account set acc = '$acc',pwd = '$pwd', namea = '$namea', dpm = '$dpm',timea_2 = '$date',worker_2 = '$user' where acc = '$acc1'";
			$pre = $pdo->prepare($sql);
			$pre->execute();
			echo '修改成功';
		}
	}
?>