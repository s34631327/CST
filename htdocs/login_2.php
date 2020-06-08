<?php
	session_start(); 
	include 'consqlsrv.php';
	
	if (isset($_POST["acc"]) && isset($_POST["pwd"])){
		$GLOBALS['acc']=$_POST["acc"];
		$GLOBALS['pwd']=$_POST["pwd"];
		
		if(isset($_POST["rememberme"]))
			$GLOBALS['rememberme'] = 1;
		else
			$GLOBALS['rememberme'] = 0;
	}
	class Member
	{
		public function showMember()
		{
			if ($this->pwd == $GLOBALS['pwd']){
				$_SESSION['username'] = $this->namea;
				$_SESSION['acc'] = $this->acc;
				$_SESSION['pwd'] = $this->pwd;
				$_SESSION['dpm'] = $this->dpm;
				file_put_contents('login.txt',$this->namea, FILE_APPEND | LOCK_EX);//登入紀錄寫入登陸檔
				$dsn = 'sqlsrv:server=.\SQLEXPRESS;Database=CST;';
				$user = 'sa';
				$password = 'a1234567';
				$pdo = new PDO($dsn,$user,$password);
				// $sql = "insert into loginhis select '$this->acc',$this->namea,date('Y-m-d H:i:s')";
				$date = date("Y-m-d H:i:s");
				$ipaddr = $_SERVER["REMOTE_ADDR"];
				$cptname = $_SERVER["REMOTE_HOST"];
				$sql = "insert into loginhis select '$this->acc','$this->namea','$date','$ipaddr','$cptname'";
				$pre = $pdo->prepare($sql);
				$pre->execute();
				if ($GLOBALS['rememberme'] == 1){
					setcookie("acc",$_SESSION['acc'],time()+(3600*24*30));
					setcookie("pwd",$_SESSION['pwd'],time()+(3600*24*30));
				}
				else{
					setcookie("acc",$_SESSION['acc'],time()-1);
					setcookie("pwd",$_SESSION['pwd'],time()-1);
				}
				header("Location:home.php"); 
			}
			else{
				echo "<script>alert('密碼輸入有誤');</script>";
				echo '<script>window.location.href="http://localhost:8887"</script>';
			}
		}
	}
	$sql = " SELECT * FROM account where acc = '$acc'";
	$pre = $pdo->prepare($sql);
	$pre->execute();
	
	if(is_array($pre->fetch())){ //如陣列存在,代表有此帳號
		$pre = $pdo->prepare($sql);
		$pre->execute();
		$row = $pre->fetchObject("Member");
		$row->showMember();
	}
	else{ //無此帳號
		echo "<script>alert('無此帳號');</script>";
		echo '<script>window.location.href="http://localhost:8887"</script>';
	};
?>