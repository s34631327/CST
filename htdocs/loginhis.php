<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	include 'consqlsrv.php';
	include 'session.php';
	
	$sql = "select a.*,b.lastOPRT
			from loginhis a
			left join account b on a.acc = b.acc
			order by timea desc";
	$pre = $pdo->prepare($sql);
	$pre->execute();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
</style>
<link rel="stylesheet" href="css/center.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/XMLHttpRequest.js"></script>
<script type="text/javascript" src="scripts/includeHTML.js"></script>
<script>
	$(document).ready(function (){
		$('#login').addClass('active');
	});
</script>
<title>CST</title>
	
	<body>
		
		<div w3-include-html="nav.php"></div>
		<script>
			includeHTML();
		</script>
		<?php
		echo '<table class="table table-striped table-hover table-sm"><thead class="thead-active"><tr><th>帳號</th><th>使用者</th><th>登入時間</th><th>登入IP</th><th>登入電腦名稱</th><th>最後操作時間</th></thead>';

		while ($row = $pre->fetch()){
			echo '<tr><td>'.$row['acc'].'</td><td>'.$row['namea'].'</td><td>'.$row['timea'].'</td><td>'.$row['ipaddr'].'</td><td>'.$row['cptname'].'</td><td>'.$row['lastOPRT'].'</td></tr>';
		}
		echo '</table>';
		?>
	</body>
</head>
</html>
