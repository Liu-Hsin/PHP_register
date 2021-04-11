<?php
$host = '127.0.0.1';
$user = 'root';
$pwd = '';
$dbname = 'web';

$db = new mysqli ($host,$user,$pwd,$dbname);
$db -> query("set name utf-8");

if($db -> connect_errno <> 0 )
	{
		echo "数据库连接失败！";
		die("error:".mysqli_connect_error());
	}
// else{
// 		echo "连接成功！";
// }
?>
