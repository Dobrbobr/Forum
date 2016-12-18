<?php
$iuser = $_GET['user_name'];
$ipswd = md5($_GET['user_pswd']);
require('connection.php');
$rez = mysql_query("select * from users where name='$iuser' and pswd='$ipswd'");
if(mysql_num_rows($rez)>0){
	session_start();
	$_SESSION['login']='ok';
	$_SESSION['user_name']=$_GET['user_name'];
	header("Location:main.php");}
else
	{header("Location:index.html");
	exit();
	};
?>
<html>
<head>
</head>
<body>
	<a href='main.php'>Молодец! Переходи</a>
</body>
</html>