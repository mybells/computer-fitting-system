<?php
session_start();
	require_once('connect.php');
     @$rr=$_SESSION['username'];
    //echo "<script>alert($rr)</scrupt>";
     if($rr)
{
	date_default_timezone_set('PRC');
	$date = date("Y-m-d H:i:s");
	$danjia=$_GET['danjia'];
	$spname=$_GET['spname'];
	$insertsql = "insert into gouwuche(yonghu,商品名称,单价,数量,小计,date) values ('$rr','$spname','$danjia','1','$danjia','$date')";
	if(mysql_query($insertsql)){
		echo "<script>alert('加入成功');window.location.href='222.php';</script>";
	}else{
		echo "<script>alert('加入失败');window.location.href='222.php';</script>";
	}
    
}
else{
	//$rr=$_SESSION['username'];
	 echo "<script>alert('请先登录');window.location.href='222.php';</script>";
}
	?>