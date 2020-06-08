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
<script type="text/javascript" src="scripts/XMLHttpRequest.js"></script>
	<script type="text/javascript" src="scripts/includeHTML.js"></script>
	<style>
		
	</style>
	<script>
	function a() {
		document.execCommand("Copy");	
	}
	//顯示圖片
	function displayImg(image) {
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
				document.getElementById("image").src = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","image.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("image="+image.innerHTML);
	}
	//圖片消失
	function vanishImg(){
		var img = document.getElementById("image");
		img.style.display = "none";
	}
	
	
	
	// function addClass(element,classToAdd) 
	// {
		// var currentClassValue = element.className;
		// if (currentClassValue.indexOf(classToAdd) == -1) 
		// {
			// if((currentClassValue == null) || (currentClassValue === "")) 
			// {
				// element.className = classToAdd;
			// } 
			// else 
			// {
				// element.className += " " + classToAdd;
			// }
		// }
	// }	
	// var theDropDown = document.querySelector("#addclass");  // 取得我們要的HTML元素
	// addClass(theDropDown, "active");  // 呼叫addClass將hideMenu樣式設定給HTML元素
	
	// $(document).ready(function(){
	// $("#copyBtn").click(function() {
		// var name = $(this).attr('name');
		// var el = document.getElementById(name);
		// var range = document.createRange();
		// range.selectNodeContents(el);
		// var sel = window.getSelection();
		// sel.removeAllRanges();
		// sel.addRange(range);
		// document.execCommand('copy');
		// alert("Contents copied to clipboard.");
		// return false;
		// });
	// });

	$(document).ready(function (){
		// document.getElementById("acc").className = "active";
		$('#acc').addClass('active');
	});
	
	// myFunction();
	</script>
<title>CST</title>
	<body>
		<div w3-include-html="nav.php"></div>
		<script>
			includeHTML();
		</script>
		<div class="container">
			<?php
				$ip = $_SERVER["REMOTE_ADDR"];
				//get machine or pc name
				echo $ip.'<br>';
				
				echo $_SERVER['REMOTE_HOST'];
			?>
			<br/>
			<input type="checkbox" name="rememberme" value="1"> Remember me<br/> 
		</div>
	</body>
		<script>
		</script>
</head>
</head>
</html>
