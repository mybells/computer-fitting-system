<?php
    session_start();
	require_once('connect.php');
	?>
<html>
<head>
	<title>购物网</title>
<style>
	body
	{
		padding: 0;
		margin: 0;
	}
	.top
	{
	      text-align: right;
		background-color: #f5f5f5;
		  height:40px;
		  line-height: 40px;
		  padding-right:40px;
	}
	.top .zhuye
	{
		  text-decoration: none;
		  color: black;

	}

	.top .zhuye:hover
	{
      color:#f22e00;
    
	}

	    .zhuye{
		float: left;
		font-weight: bold;
	          }
	.table2
    {
border: 1px solid black;

margin-left: auto;
margin-right: auto;

    }
    }
.table2 th,td
    {
   border: 1px solid black;

    }


.qw td
{
	 border: 1px solid gray;
	 text-align: center;
}
.rr th
{
       border: 1px solid black;	
}
.qw input
{
	font-size: 23px;
}
.tian
{
	float: right;
	text-decoration: none;
	color: #fff;
	background-color: #ff4400;
}
.tian:hover
{
	background-color: orange;
}
</style>
</head>
<body>

<div class="top">
<a href="manager.php" class="zhuye">[返回上一页]</a><br>
<table class="table2" cellspacing="0" cellpadding="0">
    <thead >
      <tr class="rr">
      <th >商品名称</th>
          <th >单价</th>
          <th >图片名称</th>          
          <th>商品详情</th>
             <th >添加</th>   
      </tr>
    </thead>

<tbody> 
    <tr class="qw">      
       <form method="post" action="tianjiachuli.php">
        <td><input name="name" type="text" style="width:340px;font-size:23;resize:none;line-height:50px;height:50;" value=""></td>
       <td><input name="danjia" type="text" style="width:150px;line-height:50px;height:50;" value=""></td>
       <td><input name="tupian" type="text" style="width:150px;line-height:50px;height:50;" value=""></td>
       <td><textarea name="xiangqing" style="resize:none;width:500px;font-size:23;line-height:50px;height:50;border-weight:bold;"></textarea></td>
      <td  align="center"><input type="submit" value="添加"></td>
      </form>
 
    </tr>
</tbody>
</table>




	
</body>
</html>
