<?php //注册信息验证
include('headerfiles.php');
include('input.php');

$username=$_POST['user'];
$password=$_POST['pass'];
$confirm=$_POST['confirm'];

$is = $namecheck -> test($username);

if ($is == false){
	echo "<script>alert('用户名不符合要求，请重新输入！'); history.go(-1);</script>";
}
	elseif($password<>$confirm)
	{    
	echo "<script>alert('两次输入密码不一致，请重新确认！'); history.go(-1);</script>";
	}
else
	{
	$sql = "INSERT INTO `user` (`id`,`name`,`password`) VALUES ( NULL,'{$username}','{$password}')";
	$is = $db -> query($sql);
	echo "<script>alert('注册成功，返回登入'); location.href='index.php';</script>";
	}
?>
