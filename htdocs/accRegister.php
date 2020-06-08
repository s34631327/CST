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
	$(document).ready(function (){
		$('#acc').addClass('active');
	});
</script>
<title>CST</title>
	<body>
		
		<div w3-include-html="nav.php"></div>
		<script>
			includeHTML();
		</script>
		
		<div class="container">
			<form action="accRegister_2.php" method="post">
				<div class="form-group">
					<label for="acc">帳號</label>
					<input type="text" class="form-control" id="acc" name="acc">
				</div>
				<div class="form-group">
					<label for="pwd">密碼</label>
					<input type="password" class="form-control" id="pwd" name="pwd">
				</div>
				<div class="form-group">
					<label for="pwd2">再次輸入密碼</label>
					<input type="password" class="form-control" id="pwd2" name="pwd2">
				</div>
				<div class="form-group">
					<label for="namea">姓名</label>
					<input type="text" class="form-control" id="namea" name="namea">
				</div>
				<div class="form-group">
					<label for="dpm">部門 :</label>
					<select name="dpm">
						<option value="管理員">管理員</option>
						<option value="設計">設計</option>
						<option value="業務">業務</option>
						<option value="會計">會計</option>
						<option value="加工">加工</option>
						<option value="維修">維修</option>
					</select>
				</div>
				<button type="submit" class="btn btn-dark">註冊</button>
			</form>
		</div>
		
	</body>
</head>
</html>
