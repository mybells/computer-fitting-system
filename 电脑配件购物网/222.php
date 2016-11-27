	<?php
	session_start();
	require_once('connect.php');
	  $diannao2 = mysql_query("select * from search where id=2");
	  $neicun10 = mysql_query("select * from search where id=10");
	  $cpu13 = mysql_query("select * from search where id=13");
	  $xianshiqi7 = mysql_query("select * from search where id=7");
	  $xianshiqi8 = mysql_query("select * from search where id=8");
	  $data1 = mysql_fetch_assoc($diannao2);
	  $data2 = mysql_fetch_assoc($neicun10);
	  $data3 = mysql_fetch_assoc($cpu13);
	  $data4 = mysql_fetch_assoc($xianshiqi7);
	  $data5 = mysql_fetch_assoc($xianshiqi8);
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
	    .zhuye{
		float: left;
		font-weight: bold;
	          }
	          .guanli{
	          		float: left;
		font-weight: bold;
		font-size: 22px;
		height: 40px;
		line-height: 40px;
		border:none;
		background-color: #f5f5f5;
	          }
		.guanli:hover
		{
	      color:#f22e00;
	    
		}
		
	    </style>
</head>
	<body>

	<div class="top">
	<a href="222.php" class="zhuye">[主页]</a>
<form method="post" action="houtai.php">
	<input type="submit" class="guanli" value="[后台管理]"></form>
	<a href="denglu.php" id="denglu">亲，请[登录]</a>
	<a href="zhuce.php" class="register">[注册]</a>
	<a href="gouwu.php" class="gouwu">[购物车]</a>
	<a href="tuichu.php">[退出]</a>

	<script type="text/javascript">
		var logi=document.getElementById("denglu");
		
		
		logi.innerHTML="<?=$_SESSION['username'];?>";
</script>

	</div>
	<div class="search">
	<form name="form1" method="post" action="search.php">
	<input type="text" name="keyword" class="search_text">
	<input type="submit" name="sousuo" value="搜 索" class="search_btn" >
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
	<div class="bottom">


	<div class="one">
	  <div class="bottom_1">
	 <a><img  src="<?php echo $data1['tupian']?>">
	  <p name="danjia"><?php echo "￥".$data1['jiage']?><p>
	 <h6 name="spname"><?php echo $data1['shangping']?><h6></a>
	 </div>

	   <div class="bottom_2"  name="xuanfu">
	 <p>商品详情</p>
	 <h6><?php echo $data1['shangpingxiangqing']?></h6>
	 <a href="goumai.php?danjia=<?php echo $data1['jiage']?>&spname=<?php echo $data1['shangping']?>">立即购买</a>
	 <a href="joingouwu.php?danjia=<?php echo $data1['jiage']?>&spname=<?php echo $data1['shangping']?>">加入购物车</a>
	 </div>
	 </div>

	<div class="one">
	 <div class="bottom_1">
	 <a><img  src="<?php echo $data2['tupian']?>">
	 <p><?php echo "￥".$data2['jiage']?><p>
	 <h6><?php echo $data2['shangping']?><h6></a>
	 </div>
	 <div  class="bottom_2" name="xuanfu">
	 <p>商品详情</p>
	 <h6><?php echo $data2['shangpingxiangqing']?></h6>
	<a href="goumai.php?danjia=<?php echo $data2['jiage']?>&spname=<?php echo $data2['shangping']?>">立即购买</a>
	 <a href="joingouwu.php?danjia=<?php echo $data2['jiage']?>&spname=<?php echo $data2['shangping']?>">加入购物车</a>
	 </div>
	 </div>

	<div class="one">
	 <div class="bottom_1">
	 <a><img  src="<?php echo $data3['tupian']?>">
	 <p><?php echo "￥".$data3['jiage']?><p>
	 <h6><?php echo $data3['shangping']?><h6></a>
	 </div>
	 <div  class="bottom_2" name="xuanfu">
	 <p>商品详情</p>
	 <h6><?php echo $data3['shangpingxiangqing']?></h6>
	 <a href="goumai.php?danjia=<?php echo $data3['jiage']?>&spname=<?php echo $data3['shangping']?>">立即购买</a>
	 <a href="joingouwu.php?danjia=<?php echo $data3['jiage']?>&spname=<?php echo $data3['shangping']?>">加入购物车</a>
	 </div>
	 </div>

	<div class="one">
	 <div class="bottom_1">
	 <a><img  src="view1.jpg">
	 <p><?php echo "￥".$data4['jiage']?><p>
	 <h6><?php echo $data4['shangping']?><h6></a>
	 </div>
	 <div  class="bottom_2" name="xuanfu">
	 <p>商品详情</p>
	 <h6><?php echo $data4['shangpingxiangqing']?></h6>
	 <a href="goumai.php?danjia=<?php echo $data4['jiage']?>&spname=<?php echo $data4['shangping']?>">立即购买</a>
	 <a href="joingouwu.php?danjia=<?php echo $data4['jiage']?>&spname=<?php echo $data4['shangping']?>">加入购物车</a>
	 </div>
	 </div>

	<div class="one">
	  <div class="bottom_1">
	 <a><img  src="<?php echo $data5['tupian']?>">
	  <p><?php echo "￥".$data5['jiage']?><p>
	 <h6><?php echo $data5['shangping']?><h6></a>
	 </div>
	   <div class="bottom_2"  name="xuanfu">
	 <p>商品详情</p>
	 <h6><?php echo $data5['shangpingxiangqing']?></h6>
	 <a href="goumai.php?danjia=<?php echo $data5['jiage']?>&spname=<?php echo $data5['shangping']?>">立即购买</a>
	 <a href="joingouwu.php?danjia=<?php echo $data5['jiage']?>&spname=<?php echo $data5['shangping']?>">加入购物车</a>
	 </div>
	 </div>


	</div>
	</body>
	</html>