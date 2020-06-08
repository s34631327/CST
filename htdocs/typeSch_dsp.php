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
<title>CST</title>
	<body>
		<?php
			$typea=$_POST["typea"];
			// $typea='20200-01105-00';	
			$sql = " SELECT * FROM typeSch_dtl where partno = '$typea'";
			$pre = $pdo->prepare($sql);
			$pre->execute();
			while ($row = $pre->fetch()){
		?>
		<table style="background-color:#4F4F4F;color:white;">
			<tr>
				<th>partno產品代碼</th>
				<?php echo '<td>'.$row['partno'].'</td>'; ?>
			</tr>
			<tr>
				<th>partdesc 產品名稱</th>
				<?php echo '<td>'.$row['partdesc'].'</td>'; ?>
			</tr>
			<tr>
				<th>shortdesc 簡稱</th>
				<?php echo '<td>'.$row['shortdesc'].'</td>'; ?>
			</tr>
			<tr>
				<th>opartno 原廠編碼</th>
				<?php echo '<td>'.$row['opartno'].'</td>'; ?>
			</tr>
			<tr>
				<th>sizes 規格</th>
				<?php echo '<td>'.$row['sizes'].'</td>'; ?>
			</tr>
			<tr>
				<th>vendno 供應廠商</th>
				<?php echo '<td>'.$row['vendno'].'</td>'; ?>
			</tr>
			<tr>
				<th>lineprice 成本價</th>
				<?php echo '<td>'.$row['lineprice'].'</td>'; ?>
			</tr>
			<tr>
				<th>remark 備註資料</th>
				<?php echo '<td>'.$row['remake'].'</td>'; }?>
			</tr>
		<table>
		<div>
			<?php
				echo '<img src="image/'.$typea.'.jpg" alt="">';
			?>
		</div>
	</body>
</head>
</html>
