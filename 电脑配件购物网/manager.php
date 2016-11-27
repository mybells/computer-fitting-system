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
	.top .zhuye,.denglu,.tuichu
	{
		  text-decoration: none;
		  color: black;

	}
	.top .tuichu:hover
	{
      color:#f22e00;
    
	}
	.top .denglu:hover
	{
      color:#f22e00;
    
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
width: 1200px;
margin-left: auto;
margin-right: auto;

}
}
.table2 th,td
{
   border: 1px solid black;

}
.tt
{
	 margin-left: auto;
margin-right: auto;

}

   .ww
  {
    text-align: left;
    margin: 0;
    margin-left: 54px;
    width: 1200px;
    background-color: #d41420; 
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
<a href="222.php" class="zhuye">[主页]</a>
<a href="denglu.php" id="denglu" class="denglu">亲，请[登录]</a>
<a href="tuichu.php" class="tuichu">[退出]</a>
<script type="text/javascript">
	var logi=document.getElementById("denglu");
	if ("<?=$_SESSION['username'];?>"!="") {
	
	logi.innerHTML="<?=$_SESSION['username'];?>";
};
</script>










<table class="table2" cellspacing="0" cellpadding="0">
    <thead>
      <tr class="tt"><h2 class="ww">管理商品<a href="managertianjia.php" class="tian">添加</a></h2></tr>
      <tr class="rr">
      <th width="25">编号</th>
          <th width="250">商品名称</th>
          <th width="130">单价</th>
      
          <th width="150">商品详情</th>
             <th width="70">修改</th>
          <th width="70">删除</th>
      </tr>
    </thead>

<tbody> 
<?php

    /* echo $data['商品名称']." &nbsp;".$data['单价']." &nbsp;&nbsp;&nbsp;//".$data['数量']."   &nbsp;&nbsp;&nbsp;&nbsp;".$data['小计'];*/
 @$rr=$_SESSION['username'];
 if($rr)
{
  //  for ($i=1; $i<500;$i++) { 
  # code...
  $query = mysql_query("select * from search");
   
  while($data = mysql_fetch_array($query)) 
         { ?>
 
    <tr class="qw">
       
       <form method="post" action="managerxiugai.php">
       <td><textarea name="id"    readonly 
       style="width:40px;text-align:center;font-size:23;height:80px;">
       <?php echo $data['id']?></textarea></td>
       <td><textarea name="name" style="resize:none;width:340px;font-size:23;height:80px;"><?php echo $data['shangping']?></textarea></td>
       <td><input name="jiage" type="text" style="width:140px;text-align:center;" value="<?php echo $data['jiage']?>"></td>
       <td><textarea name="xiangqing" style="resize:none;width:500px;font-size:23;height:80px;"><?php echo $data['shangpingxiangqing']?></textarea></td>
      <td  align="center"><input type="submit" value="提交修改"></td>
      </form>
      <td align="center"><input type="button" value="删除" onclick="del(<?php echo $data['id'];?>)"></td>
    </tr>
<?php    }
                            
}
 ?>
<script type="text/javascript">
   function del(id){
  window.location="mannagershanchu.php?id="+id;
}   

</script>
</tbody>
</table>




	
</body>
</html>
