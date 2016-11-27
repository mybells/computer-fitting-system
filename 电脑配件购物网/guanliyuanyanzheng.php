<?php

header("content-type:text/html;charset=utf-8");

//连接数据库
session_start();
require_once('connect.php');

//设置字符串编码

mysql_query("set names utf8");

//选择数据库

mysql_select_db("guanli");

//获取表单数据。

$username=$_POST['username'];

$password=$_POST['password'];

//$pwd=md5($pwd); //本示例仅为测试，未考虑测安全方面， 可以对密码进行md5加密。

$sql="select * from guanliyuan where name='{$username}'";  

$rs=mysql_query($sql); //执行sql查询

$num=mysql_num_rows($rs); //获取记录数

if($num){ // 用户存在；

   $row=mysql_fetch_array($rs);
 if($username==='admin'&&$password===$row['mima']){ //对密码进行判断。
	$_SESSION['username']=$row['name'];
    echo "<script>alert('登陆成功，正在为你跳转至后台页面');
          window.location.href='manager.php';</script>";}
    else{
echo "<script>alert('密码不正确,返回登陆页面');window.location.href='guanliyuan.php';</script>";
} }
else{
 echo "<script>alert('用户不存在,返回登陆页面');window.location.href='guanliyuan.php';</script>";
}

?>