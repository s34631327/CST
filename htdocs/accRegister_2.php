<?php
	include 'consqlsrv.php';
	include 'session.php';
	
	if (!empty($_POST["acc"]) && !empty($_POST["pwd"]) && !empty($_POST["pwd2"]) && !empty($_POST["dpm"])){
		$acc=$_POST["acc"];
		$pwd=$_POST["pwd"];
		$pwd2=$_POST["pwd2"];
		$dpm=$_POST["dpm"];
		$namea=$_POST["namea"];
		$date = date("Y-m-d H:i:s");
		$user=$_SESSION['username'];
		if ($pwd != $pwd2){
			echo "<script>alert('密碼輸入不相同');</script>";
			echo '<script>window.location.href="/accRegister.php"</script>';
		}
		else{
			$sql = "select acc from account where acc = '$acc'";
			$pre = $pdo->prepare($sql);
			$pre->execute();
			if(is_array($pre->fetch())){
				echo "<script>alert('帳號已存在');</script>";
				echo '<script>window.location.href="/accRegister.php"</script>';
			}
			else{
				$sql = "insert into account select '$acc','$pwd','$dpm','1','$namea','$date','$user','','',''";
				$pre = $pdo->prepare($sql);
				$pre->execute();
				echo "<script>alert('註冊成功');</script>";
				echo '<script>window.location.href="/accSch.php"</script>';
			}
		}
	}
	else{
		echo "<script>alert('資料輸入不齊');</script>";
		echo '<script>window.location.href="/accRegister.php"</script>';
	}
?>