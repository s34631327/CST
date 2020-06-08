<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	include 'consqlsrv.php';
	// $sql = " SELECT * FROM tabletest";
	// $pre = $pdo->prepare($sql);
	// $pre->execute();
	// if (isset($_POST["pwd"]))
	// echo $acc.$pwd;
	// while ($row = $pre->fetch()){
		// echo $row['大組件'];
		// print_r($row);
	// }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
	</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/XMLHttpRequest.js"></script>
<title>CST</title>
	<body>
		<div class="container">
			<form action="login_2.php" method="post">
				<div class="form-group">
					<label for="acc">帳號</label>
					<input type="text" class="form-control" id="acc" aria-describedby="accountHelp" name="acc" placeholder="請輸入帳號">
					<small id="accountHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="pwd">密碼</label>
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="請輸入密碼">
				</div>
				<input type="checkbox" name="rememberme" value="1" checked> Remember me<br/> 
				<button type="submit" class="btn btn-dark">登入</button>
			</form>
		</div>
	</body>
	<?php
		
	if(isset($_COOKIE['acc']) && isset($_COOKIE['pwd'])){
		$acc = $_COOKIE['acc'];
		$pwd = $_COOKIE['pwd'];
		echo '<script>document.getElementById("acc").value = '."'$acc'".' </script>';
		echo '<script>document.getElementById("pwd").value = '."'$pwd'".' </script>';
	}
	?>
</head>
</html>

