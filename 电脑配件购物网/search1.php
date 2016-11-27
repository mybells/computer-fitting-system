<?php
    session_start();
	require_once('connect.php');
	@$keyword=$_POST['keyword'];
	if ($keyword=="") {
		echo "<script>alert('你要搜索的关键字不能为空');</script>";
		# code...
	}
	$query = mysql_query("select * from search where shangping like '%$keyword%'");
	$qq=array();

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
	.top a
	{
		  text-decoration: none;
		  color: black;

	}
	.top a:hover
	{
      color:#f22e00;
    
	}

	.bottom
	{
      width: 1050px;
	  margin:0 auto;
	}
	.bottom_1
	{
	
	    width: 250px;
	    height: 370px;
	
		margin-bottom: 17px;
		float: left;
		
	}

	
	.bottom_1 img
	{
		width: 250px;
		height: 250px;
	}
	.bottom_1 p
	{   margin-top: 5px;
		font-size: 20px;
		font-weight: bold;
		color: #ff4400;
	}
	.bottom_1 h6
	{
		margin-top: -5px;
	}
	.bottom_1 a
	{
		text-decoration: none;
		  color: black;
	}
	.bottom_1 a:hover
	{
		text-decoration: underline;
		  color: black;
	}
	.search{
		width: 960px;
		margin: 0 auto;
	}
	.search_text
	{
		border:2px solid #d41420;
		width: 870px;
		height:40px;
		float: left;
		padding: 0 5px;
		font-size: 18px;
	}
	.search_btn
	{
		border:none;
		width: 90px;float: right;
		height:40px;font-size:20px;font-family:"Microsoft YaHei","微软雅黑";background-color: #d41420;color: #FFF;

	}
	.daohang
	{
		background-color: #d41420;
		height: 45px;
		
		line-height: 45px;
		margin-top: 75px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 15px;
	}
	.nav li{
		float: left;
		list-style: none;
		margin-left: 140px;

	}
	.nav a{
		text-decoration: none;
		color: #FFF;
		height: 45px;
		padding: 0 35px;
		display: inline-block;

	}
	.nav a:hover
	{
		height: 45px;
		background-color: #b1191a;
		padding: 0 35px;
		display: inline-block;
		
	}
	.bottom_2
	{
		width: 250px;
		height: 370px;
		
		float: left;
		background-color: #fff;
		
	position: relative;
		right: 1px;
		top: 0px;
	}

	.bottom_2 p
	{
		background-color: #d41420;
		color: #fff;
		margin-top: 0;
		width: 251px;
		height: 70px;
		line-height: 70px;
	}
	.bottom_2 a
	{
	    
		background-color: #ff4400;
		text-decoration: none;
		color: #fff;
		margin-top: 40px;
		margin-left: 7px;
		height: 40px;
		line-height: 40px;
		display: inline-block;
	}
	.bottom_2 a:hover
	{
		background-color: #f22d00;
	}
	.one
	{
		width: 500px;
		height: 370px;
		float:left;
		margin-bottom: 17px;
		margin-left: 17px;
		border:1px solid #FFF;
	}
	.one:hover
	{
		border:1px solid #ff4400;
	}
    .screening
    {
	border: 1px #fff solid;
    }
	.screening dt
	{
        line-height: 32px;width: 74px;text-align: right;float: left;margin-right:42px;font-weight: bold;
	}
	.limit{
		width: 55px;float: left;line-height: 32px;
	}
	.screening .active{background-color: #1d7ad9;color: #fff;}
	.screening a{padding: 2px;text-decoration: none;border: 1px solid;color: #1d7ad9}
	.screening_list{line-height: 0px;width: 626px;border-top: 1px solid #ccc;}
	.screening_list li{width: 20%;float: left;border: 1px solid #fff;list-style: none;}
    .zhuye{
	float: left;
	font-weight: bold;
          }	
      </style>
</head>
<body>

<div class="top">
<a href="222.php" class="zhuye">[主页]</a>
<a href="denglu.php" id="denglu">亲，请[登录]</a>
<a href="zhuce.php" class="register">[注册]</a>
<a href="gouwu.php" class="gouwu">[购物车]</a>
<a href="tuichu.php">[退出]</a>
<script type="text/javascript">
	var logi=document.getElementById("denglu");
	if ("<?=$_SESSION['username'];?>"!="") {
	
	logi.innerHTML="<?=$_SESSION['username'];?>";
};
</script>

</div>
<div class="search">
<form name="form1" method="post" action="search.php">
<input type="text" name="" class="search_text">
<input type="submit" name="" value="搜 索" class="search_btn">
</form>
</div>
<div class="daohang">
<ul class="nav">
    <li><a href="diannao.php?biaoqian=电脑">电脑</a></li>
    <li><a href="shubiao.php?biaoqian=鼠标">鼠标</a></li>
    <li><a href="xianshiqi.php?biaoqian=显示器">显示器</a></li>
    <li><a href="neicong.php?biaoqian=内存">内存</a></li>
    <li><a href="cpu.php?biaoqian=cpu">cpu</a></li>
</ul>
</div>
	<?php
	 
	 
	
	while ($data = mysql_fetch_array($query)) {
		$qq[]=$data;
	$q=$data['shangping'];
  $w=$data['jiage'];
  $e=$data['tupian'];
   $r=$data['shangpingxiangqing'];?>
<div class="bottom">

<div class="one">
 <div class="bottom_1">
 <a><img  src="<?php echo $e ?>">
 <p><?php echo $w ?><p>
 <h6><?php echo $q ?><h6></a>
 </div>
 <div  class="bottom_2" name="xuanfu">
 <p>商品详情</p>
 <h6><?php echo $r ?></h6>
<a href="goumai.php?danjia=<?php echo $w ?>&spname=<?php echo $q ?>">立即购买</a>
 <a href="joingouwu.php?danjia=<?php echo $w ?>&spname=<?php echo $w ?>">加入购物车</a>
 </div>
 </div>
</div><?php } 
           if (@is_null($q)) {
           	echo "<script>alert('抱歉，你要搜索的商品不存在。');window.history.back();</script>";
           	# code...
           }

?>
</body>
</html>