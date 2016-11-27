<?php
   session_start();
	require_once('connect.php');
	 //echo $_SESSION['username'];
	@ $ss=$_SESSION['username'];
	 if($ss!==null&&$ss=='admin')
	 {
	 	echo "<script>window.location.href='manager.php';</script>";
	 }
	 else{
	 	echo "<script>alert('管理员请登录');window.history.back();</script>";
	 }
?>