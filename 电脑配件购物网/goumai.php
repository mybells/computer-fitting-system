<?php
session_start();
	require_once('connect.php');
     @$rr=$_SESSION['username'];

    //echo "<script>alert($rr)</scrupt>";
     if($rr)
{   
	date_default_timezone_set('PRC');
	$danjia=$_GET['danjia'];
	$spname=$_GET['spname'];
	$date = date("Y-m-d H:i:s");
	$insertsql = "insert into gouwu(yonghu,商品名称,单价,数量,小计,date) values ('$rr','$spname','$danjia','1','$danjia','$date')";

		if(mysql_query($insertsql)){
		echo "<script>alert('购买成功');window.location.href='222.php';</script>";
	                               } 
	else{
		echo "<script>alert('购买失败');window.location.href='222.php';</script>";
	    } 
		
			/*if(mysql_query($insertsql)){
		
	}else{
		echo "<script>alert('购买失败');window.history.back();</script>";
	}*/
    
}
else{
	//$rr=$_SESSION['username'];
	 echo "<script>alert('请先登录');window.location.href='222.php';</script>";
}
	?>