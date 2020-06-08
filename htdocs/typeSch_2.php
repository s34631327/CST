<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	include 'consqlsrv.php';
	include 'session.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
</script>
<title>CST</title>
	<body>
	<?php
		$type=$_POST["type"];
		include 'consqlsrv.php';
		$sql ="SELECT * FROM typeSch where 大組件 = '$type' or 中組件 = '$type' or 小組件 = '$type' or 零件 = '$type'";
		$pre = $pdo->prepare($sql);
		$pre->execute();
		
		echo '<table class="table table-striped table-hover table-sm"><thead class="thead-active"><tr><th>大組件</th><th>中組件</th><th>小組件</th><th>零件</th><th></th></tr></thead>';

		while ($row = $pre->fetch()){
			echo '<tr><td><a href="#" onclick="findType(this);vanishImg(this)" onmouseover="displayImg(this)" onmouseout="vanishImg()" onmousemove="displayImg(this)">'.$row['大組件'].'</a></td>';
			echo '<td><a href="#" onclick="findType(this);vanishImg(this)" onmouseover="displayImg(this)" onmouseout="vanishImg()" onmousemove="displayImg(this)">'.$row['中組件'].'</a></td>';
			echo '<td><a href="#" onclick="findType(this);vanishImg(this)" onmouseover="displayImg(this)" onmouseout="vanishImg()" onmousemove="displayImg(this)">'.$row['小組件'].'</a></td>';
			echo '<td><a href="#" onclick="findType(this);vanishImg(this)" onmouseover="displayImg(this)" onmouseout="vanishImg()" onmousemove="displayImg(this)">'.$row['零件'].'</a><td></td></tr>';
		}
		echo '</tr></table>';
	?>
	</body>
</head>
</html>
