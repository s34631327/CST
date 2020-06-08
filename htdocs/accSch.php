<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	include 'consqlsrv.php';
	include 'session.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<link rel="stylesheet" href="css/center.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<!-- jQuery文件。務必在bootstrap.min.js 之前引入 -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.no-close .ui-dialog-titlebar-close {
		display: none;
	} 
	.ui-dialog-titlebar,button{
		background:#4F4F4F;
		color:white;
	}
	</style>
<script type="text/javascript" src="scripts/XMLHttpRequest.js"></script>
<script type="text/javascript" src="scripts/includeHTML.js"></script>
<script>
	$(function(){
		$('#accChg').dialog({
			autoOpen:false,draggable:false,modal:true,dialogClass:"no-close",
			buttons:[{text:'確定',click:function(){
				
				acc = document.getElementById("accc").value;
				pwd = document.getElementById("pwd").value;
				namea = document.getElementById("namea").value;
				dpm = document.getElementById("dpm").value;
				
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						alert(xmlhttp.responseText);
						window.location.href="http://localhost:8887/accSch.php";
					}
				}
				
				xmlhttp.open("POST","accSch_Chg.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("acc="+acc+"&pwd="+pwd+"&namea="+namea+"&dpm="+dpm+"&acc1="+acc1);
			}},
			{text:'取消',click:function(){$(this).dialog('close');}}
			]
		});
	});
	function accSchChg(acc,pwd,namea,dpm){
		acc1 = acc;
		document.getElementById("accc").value = acc;
		document.getElementById("pwd").value = pwd;
		document.getElementById("namea").value = namea;
		document.getElementById("dpm").value = dpm;
		$('#accChg').dialog('open');
	}
	function accSchDel(acc){
		var remove = confirm('確定刪除帳號 "'+acc+'" ?');
		if(remove){
				xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					alert(xmlhttp.responseText);
					window.location.href="http://localhost:8887/accSch.php";
				}
			}
			accDel = acc;
			xmlhttp.open("POST","accSch_Del.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("accDel="+accDel);
		}
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
		
			<?php
				$sql = "select * from account order by timea desc";
				$pre = $pdo->prepare($sql);
				$pre->execute();
				echo '<table class="table table-striped table-hover table-sm"><thead class="thead-active"><tr><th>帳號</th><th>密碼</th>
				<th>使用者</th><th>部門</th><th>註冊者</th><th>註冊時間</th><th>修改者</th><th>修改時間</th><th></th><th></th></thead>';
				
				while ($row = $pre->fetch()){
					$acc = $row['acc'];
					$pwd = $row['pwd'];
					$namea = $row['namea'];
					$dpm = $row['dpm'];
					echo '<tr>  <td>'.$row['acc'].'</td>
								<td>'.$row['pwd'].'</td>
								<td>'.$row['namea'].'</td>
								<td>'.$row['dpm'].'</td>
								<td>'.$row['worker'].'</td>
								<td>'.$row['timea'].'</td>
								<td>'.$row['worker_2'].'</td>
								<td>'.$row['timea_2'].'</td>';
								?>
								<td><button class="btn-dark" onclick="accSchChg(<?php echo "'$acc'".','."'$pwd'".','."'$namea'".','."'$dpm'"; ?>)">修改</button></td>
								<td><a><button class="btn-dark" onclick="accSchDel(<?php echo "'$acc'"; ?>)">刪除</button></a></td>
					<?php 
					
						// echo sprintf('<td class="btn btn-dark btn-sm" onclick="accSchChg(%s)">修改</td>',$a);
					echo '</tr>';
				}
				echo '</table>';
			?>
		<form id="accChg" title="修改帳戶資料"> 
				<label for='acc'>帳號:</label><input type="text" id="accc" value=""><br>
				<label for='pwd'>密碼:</label><input type="text" id="pwd" value=""><br>
				<label for='namea'>使用者:</label><input type="text" id="namea" value=""><br>
				部門 :<select id="dpm">
					<option value="管理員">管理員</option>
					<option value="設計">設計</option>
					<option value="業務">業務</option>
					<option value="會計">會計</option>
					<option value="加工">加工</option>
					<option value="維修">維修</option>
				</select>
			<div id="signInShow"></div>
		</form>
	</body>
</head>
</html>
