<html>
<head>
<title>注册</title>
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
   	height: 450px;
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
<div class="denglu">
<legend>账户注册</legend>
<form name="myform2" method="post" action="zhucecharu.php">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密  码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<label for="dizhi" class="label">地  址:</label>
<input id="dizhi" name="dizhi" type="text" class="input" />
<p/>
<p>
<label for="shouji" class="label">手机号:</label>
<input id="shouji" name="shouji" type="text" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  提  交  " class="left" />
</p>

</div>
</div>
</body>
</html>