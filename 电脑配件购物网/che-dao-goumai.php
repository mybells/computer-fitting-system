<?php
    session_start();
	require_once('connect.php');
	date_default_timezone_set('PRC');
	$id = $_REQUEST['id'];
$query = mysql_query("select * from gouwuche where id=$id");
  $data = mysql_fetch_assoc($query);
  $q=$data['yonghu'];
  $w=$data['商品名称'];
  $e=$data['单价'];
  $r=$data['数量'];
  $t=$data['小计'];
  $date = date("Y-m-d H:i:s");


	$insertsql = "insert into gouwu(yonghu,商品名称,单价,数量,小计,date) values ('$q','$w','$e','$r','$t','$date')";
	if(mysql_query($insertsql)){
		echo "<script>alert('购买成功');window.location.href='gouwu.php';</script>";
	}else{
		echo "<script>alert('购买失败');window.location.href='gouwu.php';</script>";
	}
	?>