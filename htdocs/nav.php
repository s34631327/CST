<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	include 'consqlsrv.php';
	include 'session.php';
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
<script type="text/javascript" src="scripts/includeHTML.js"></script>
<script>
</script>
<title>CST</title>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
		  
			<a class="navbar-brand" href="home.php">CST</a>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item dropdown" id="typeSch">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">物料搜尋</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="typeSch.php">物料查詢系統</a>
							<a class="dropdown-item" href="#">物料關聯設定</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="typeSch">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">基本資料</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">產品主檔資料</a>
							<a class="dropdown-item" href="#">產品用料查詢</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="typeSch">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">庫存</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">庫存類型</a>
							<a class="dropdown-item" href="#">供應商資料</a>
							<a class="dropdown-item" href="#">分倉庫查詢</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="typeSch">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">銷售</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">客戶基本資料</a>
							<a class="dropdown-item" href="#">客戶報價單</a>
							<a class="dropdown-item" href="#">訂單明細表</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="typeSch">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">出貨</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">出貨單</a>
							<a class="dropdown-item" href="#">出貨明細表</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="login">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">系統</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="loginhis.php">登入紀錄</a>
							<a class="dropdown-item" href="#">操作紀錄</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="acc">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">帳號</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="accRegister.php">註冊帳戶</a>
							<a class="dropdown-item" href="accSch.php">查詢&修改帳戶</a>
							<a class="dropdown-item" href="accPwdChg.php">修改個人密碼</a>
						</div>
					</li>
				</ul>
				<span class="navbar-text">
					<a>
						<?php 
							echo $_SESSION['username'].'-'.$_SESSION['dpm'];
							echo '&nbsp;&nbsp;&nbsp;&nbsp;';
						?>
					</a>
				</span>
				<span class="navbar-text">
					<?php
						 echo "<a href=\"logout.php\">登出</a>";
					?>
				</span>
			</div>
		  
		</nav>
		<br />
		<br />
		<br />
		
	</body>
</head>
</html>
