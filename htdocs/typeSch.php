<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	include 'consqlsrv.php';
	include 'session.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/center.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/XMLHttpRequest.js"></script>
<script type="text/javascript" src="scripts/includeHTML.js"></script>
<script>
	function typeSch(){
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		
		type = document.getElementById("type").value;
		xmlhttp.open("POST","typeSch_2.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("type="+type);
	}
	function findType(typea){
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		
		xmlhttp.open("POST","typeSch_fd.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("typea="+typea.innerHTML);
	}
	//顯示圖片
	function displayImg(typea) {
		var img = document.getElementById("image");
		
		var x = event.clientX + document.body.scrollLeft + 20;
		var y = event.clientY + document.body.scrollTop - 5; 

		img.style.left = x + "px";
		img.style.top = y + "px";
		img.style.display = "block";
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("image").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","typeSch_dsp.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("typea="+typea.innerHTML);
	}
	//圖片消失
	function vanishImg(){
		var img = document.getElementById("image");
		img.style.display = "none";
	}
	function copy(){
		document.execCommand("Copy");	
	}
	$(document).ready(function (){
		$('#typeSch').addClass('active');
	});
</script>
	<style>
		img{
			width:400px;
			border:black 1px solid;
		}
		#image{
			position: absolute;
			display: none;
		}
	</style>
<title>CST</title>
	<body onmouseup="copy();">
		
		<div w3-include-html="nav.php"></div>
		<script>
			includeHTML();
		</script>
		
		查詢型號:	
			<input type="text" id="type">
			<button type="button" class="btn btn-dark btn-sm" onclick="typeSch();">查詢</button>
		<br />
		<br />
		
		<div id="myDiv"></div>
		<div id="image">
			<img src="" alt="">
		</div>
	</body>
</head>
</html>
