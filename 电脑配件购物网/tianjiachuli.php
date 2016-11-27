<?php
    session_start();
	require_once('connect.php');
    $name=$_POST['name'];
	$danjia=$_POST['danjia'];
	$tupian=$_POST['tupian'];
	$xiangqing=$_POST['xiangqing'];
	//echo $name,$danjia,$tupian,$xiangqing;
	if ($name!=""&&$danjia!=""&&$tupian!=""&&$xiangqing!="") {
		# code...
	
	$insertsql = "insert into search(shangping,jiage,tupian,shangpingxiangqing) values ('$name','$danjia','$tupian','$xiangqing')";
	if(mysql_query($insertsql)){
		echo "<script>alert('添加成功');window.history.back();</script>";}
	}else{
		echo "<script>alert('添加失败');window.history.back();</script>";
	     }
	?>