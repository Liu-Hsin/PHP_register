<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>登陆</title>
		<link href="C.css" rel="stylesheet" type="text/css" />
	</head>
 <body>
		<div class="box"> 
		<h2>Login</h2>
		<form action="check.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><input autocomplete="off" type="text" name="user" value="" required="required"placeholder=   "           请输入您的用户名"><label>用户名</label></div>
			<div class="inputBox"><input autocomplete="off" type="password" name="pass" value=""required="required"placeholder="           请输入您的密码"><label>密码</label></div>
			<div class="inputBox"><input autocomplete="off" type="text" width="100px" value="" name="codeNum" required="required"placeholder="           请输入验证码最后一位"><label>验证码</label></div>
			<input type="submit" name="submit" value="登录">
			<a href="register.php" id="But" >注册</a>
			<img src="code.php" style="width:100px;height:25px;" id="code"/>
		</form>
		</div>
	</body>
</html>

