<html>
<head>
<title>登录</title>
<style>
body
{
	margin:0;
	padding: 0;
}
    .tu
    {
    	background:url('denglutu.png') no-repeat;
    	height: 600px;
    	position: relative;
    	margin-top: 90px;
    }
   .denglu
   {
   	width: 350px;
   	height: 350px;
   	background-color: #fff;
 position: absolute;
 top:120;
left:170px;
   }
   legend
   {
   	font-weight: bold;
   	margin-top: 30px;
   	margin-left: 25px;

   }
   .denglu input
   {

      width: 300px;
      height: 40px;
      margin-left: 25px;
   }
   label
   {
   	margin-left: 25px;
   }
   .denglu .left
   {
   	background-color: #ff4400;
   	font-size: 20px;
   	color: #fff;
   }
   .zhuye{
  float: left;
  font-weight: bold;
  color: black;
}
.zhuye:hover
{
  color: orange;
}
</style>
</head>
<body>
<div class="tu">
<a href="222.php" class="zhuye">[返回主页]</a>
<a href="guanliyuan.php" class="zhuye">[管理员登录]</a>
<div class="denglu">

<legend>管理员登录</legend>
<form name="myform" method="post" action="guanliyuanyanzheng.php">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密  码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  登 录  " class="left" />
</p>
</form>
</div>
</div>
</body>
</html>