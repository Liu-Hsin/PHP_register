 <?php  //登陆信息验证
include ('headerfiles.php');

session_start();
if($_SESSION["validcode"] != $_POST['codeNum'])
{
	
	echo"<script>alert('验证码错误，登陆失败!');history.go(-1);</script>";
	
}
else
{
	$users = $_POST['user'];
	$pwd = $_POST['pass'];
	
    $sql = "select * from user where name = $users and password = $pwd ";
	$checkname = mysqli_query($db, $sql);
	
	if(mysqli_num_rows($checkname)>0)
		{
			echo "<script>alert('登入成功!');
			window.location.href ='main.html'
			</script>";
		}
	else 
	{   
		 echo "<script>alert('密码错误，登陆失败!');history.back();</script>";
	} 
}
?>
