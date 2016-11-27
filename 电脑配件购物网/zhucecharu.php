<?php
	require_once('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$dizhi = $_POST['dizhi'];
	$shouji = $_POST['shouji'];
	$insertsql = "insert into login(username,password,dizhi,shouji) values ('$username','$password','$dizhi','$shouji')";
	if(mysql_query($insertsql)){
		echo "<script>alert('提交成功');window.location.href='222.php';</script>";
	}else{
		echo "<script>alert('提交失败');window.location.href='zhuce.php';</script>";
	}
	?>