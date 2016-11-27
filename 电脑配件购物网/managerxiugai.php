<?php
    session_start();
	require_once('connect.php');
	 $id = $_REQUEST['id'];
	 $name = $_POST['name'];
	 $jiage = $_POST['jiage'];
	 $xiangqing = $_POST['xiangqing'];
	//echo $id,$name,$jiage,$xiangqing;
	 $updatesql = "update search set shangping='$name',jiage='$jiage',shangpingxiangqing='$xiangqing' where id=$id";
	if(mysql_query($updatesql)){
		echo "<script>alert('修改成功');window.location.href='manager.php';</script>";
	}else{
		echo "<script>alert('修改失败');window.location.href='manager.php';</script>";
	}
?>