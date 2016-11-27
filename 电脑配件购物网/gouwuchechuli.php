<?php
session_start();
	require_once('connect.php');
	 $num = $_POST['num'];
	  $id = $_REQUEST['id'];
	  $danjia = $_REQUEST['danjia'];
	  //$num=$_REQUEST['num']
	  $xiaoji=$danjia*$num;
	  //echo $id,$num,$danjia*$num;
	
	 $updatesql = "update gouwuche set 数量='$num',小计='$xiaoji' where id=$id";
	if(mysql_query($updatesql)){
		echo "<script>alert('数量修改成功');window.location.href='gouwu.php';</script>";
	}else{
		echo "<script>alert('数量修改失败');</script>";
	}
	?>
