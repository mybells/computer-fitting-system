<?php
    session_start();
	require_once('connect.php');
	 $id = $_REQUEST['id'];
	//echo $id;
	 $sql = "delete from search where id=$id";
	if(mysql_query($sql)){
		echo "<script>alert('删除成功');window.location.href='manager.php';</script>";
	}else{
		echo "<script>alert('删除失败');window.location.href='manager.php';</script>";
	}
?>