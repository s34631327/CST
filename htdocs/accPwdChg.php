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
	function accPwdChg(){
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				alert(xmlhttp.responseText);
				window.location.href="/accPwdChg.php";
			}
		}
		pwd = document.getElementById("pwd").value;
		pwd2 = document.getElementById("pwd2").value;
		pwd3 = document.getElementById("pwd3").value;
		
		xmlhttp.open("POST","accPwdChg_2.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("pwd="+pwd+"&pwd2="+pwd2+"&pwd3="+pwd3);
	}
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
			<form>
					<div class="form-group">
						<label for="pwd">原密碼</label>
						<input type="password" class="form-control" id="pwd" aria-describedby="accountHelp" name="pwd" placeholder="請輸入原密碼">
					</div>
					<div class="form-group">
						<label for="pwd2">新密碼</label>
						<input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="請輸入密碼">
					</div>
					<div class="form-group">
						<label for="pwd3">再次輸入新密碼</label>
						<input type="password" class="form-control" id="pwd3" name="pwd3" placeholder="請輸入密碼">
					</div>
					<button type="submit" class="btn btn-dark" onclick="accPwdChg()">確定</button>
			</form>
		</div>
	</body>
</head>
</html>
