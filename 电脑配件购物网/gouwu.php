<?php
session_start();
require_once('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>购物车</title>
	<style type="text/css">
	body
	{

		padding: 0;
		margin:0;
	}
	 .ee
	{
  
		margin-bottom:0;
    width: 680px;
		background-color: #d41420;	
}
   .ww
  {
    margin: 0;
     
 
    width: 750px;
    background-color: #d41420;  
}
.table th,td
{
   border: 1px solid gray;

}
.table2 th,td
{
   border: 1px solid gray;

}
.table
{

 width: 680px;
}
.table2
{

width: 750px;
}
.qwe
{
  
  width: 40px;height:30px;text-align:center;
  font-size: 20px;
}
</style>
</head>
<body>


<table class="table2" cellspacing="0" cellpadding="0">
    <thead>
      <tr><h2 class="ww">购物车</h2></tr>
      <tr class="rr">
      <th width="25">编号</th>
          <th width="250">商品名称</th>
          <th width="130">单价</th>
          <th width="70">数量</th>
          <th width="130">小计</th>
          <th width="150">日期</th>
             <th width="70">购买</th>
          <th width="70">删除</th>
      </tr>
    </thead>

<tbody> 
<?php

    /* echo $data['商品名称']." &nbsp;".$data['单价']." &nbsp;&nbsp;&nbsp;//".$data['数量']."   &nbsp;&nbsp;&nbsp;&nbsp;".$data['小计'];*/
 @$rr=$_SESSION['username'];
 if($rr)
{
    for ($i=1; $i<500;$i++) { 
  # code...
  $query = mysql_query("select * from gouwuche where id=$i");
   $data = mysql_fetch_assoc($query);
  if ($query&&$rr==$data['yonghu']) 
         { ?>
 
    <tr>
       <td><?php echo $data['id']?></td>
       <td><?php echo $data['商品名称']?></td>
       <td><?php echo "￥".$data['单价']?></td>
       <td align="center" ><form  name="manager" method="post" action="gouwuchechuli.php?id=<?php echo $data['id'];?>&danjia=<?php echo $data['单价'];?>">
       <input  type="text" name="num" class="qwe" value="<?php echo $data['数量']?>">
       <input type="submit" value="修改" style="height:30px;width:42px;" ></form></td>
       <td><?php echo "￥".$data['小计']/*"￥".$data['数量']*$data['单价']*/?></td>
       <td><?php echo $data['date']?></td>
      <td  align="center"><input type="button" value="购买" class="goumai"  onclick="edit(<?php echo $data['id'];?>)" ></td>
       <td  align="center"><input type="button" value="删除" class="btn" onclick="del(<?php echo $data['id'];?>)"></td>
    </tr>
<?php    }
                            }
}
   else
{
echo "<script>alert('请先登录');window.location.href='222.php';</script>";

}?>
<script type="text/javascript">

function edit(id){
  window.location="che-dao-goumai.php?id="+id;
}    
   function del(id){
  window.location="shanchu.php?id="+id;
}   
  //logi.innerHTML="<?=$_SESSION['username'];?>";
  function dellong(id){
  window.location="shanchulong.php?id="+id;
}  
</script>
</tbody>
</table>












<table class="table" cellspacing="0" cellpadding="0">
    <thead>
      <tr><h2 class="ee">已购买</h2></tr>
      <tr class="rr">
          <th width="25">编号</th>
          <th width="250">商品名称</th>
          <th width="130">单价</th>
          <th width="70">数量</th>
          <th width="130">小计</th>
          <th width="150">日期</th>
          <th width="70">删除</th>
      </tr>
    </thead>

<tbody> 
<?php
    /* echo $data['商品名称']." &nbsp;".$data['单价']." &nbsp;&nbsp;&nbsp;//".$data['数量']."   &nbsp;&nbsp;&nbsp;&nbsp;".$data['小计'];*/
 @$rr=$_SESSION['username'];
 if($rr)
{
    for ($i=1; $i<500;$i++) { 
  # code...
  $query = mysql_query("select * from gouwu where id=$i");
   $data = mysql_fetch_assoc($query);
  if ($query&&$rr==$data['yonghu']) 
         { ?>
 
    <tr>
       <td><?php echo $data['id']?></td>
       <td><?php echo $data['商品名称']?></td>
       <td><?php echo "￥".$data['单价']?></td>
       <td><?php echo $data['数量']?></td>
       <td><?php echo "￥".$data['小计']?></td>
       <td><?php echo $data['date']?></td>
       <td  align="center"><input type="button" value="删除" class="btn" onclick="dellong(<?php echo $data['id'];?>)"></td>
    </tr>
<?php    }
                            }
}
   else
{
echo "<script>alert('请先登录');window.location.href='222.php';</script>";
}?>
</tbody>
</table>

<a href="222.php" style="float:right; position:absolute;top:0;left:1000px;"><h2>返回主页</h2></a>


</body>
</html>