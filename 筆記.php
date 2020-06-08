<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script>
function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","index2.php",true);
	xmlhttp.send();
}
</script>
<title>CST</title>
	<body>
	<?php
	
		$serverName = ".\SQLEXPRESS";
		$connectionInfo = array("Database"=>"test0521","UID"=>"sa","PWD"=>"a1234567","CharacterSet" => "UTF-8");
		$conn = sqlsrv_connect($serverName,$connectionInfo);
		
		$result = sqlsrv_query($conn,"SELECT * FROM tabletest");//連接資料表
		// if($result === false) {
			// die(print_r(sqlsrv_errors(),true));
		// }
		// else{
			// while($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC)) {
				// echo $row['大組件'].",".$row['中組件'].','.$row['小組件'].','.$row['零件']."<br />";
			// }
		// }
		sqlsrv_close($conn);
		//https://www.runoob.com/try/try.php?filename=tryajax_first
		//https://github.com/s34631327/git/tree/master/js
	//https://www.itread01.com/content/1546322407.html
	//https://jpress.tw/2018/2043
	?>
	<form action="index2.php" method="post">
		選擇分類:
		<select name="size">
			<option>大組件</option>
			<option>中組件</option>
			<option>小組件</option>
			<option>零件</option>
		</select>
		<br /><br />
		查詢型號: <input type="text" name="type">
		<input type="submit" value="查詢" onclick="loadXMLDoc()">
		aA@#$123
		1. 密碼是否需要加密
		2. 是否需要個人資料頁面
	<div id="myDiv"></div>
	</body>
</head>
</html>
