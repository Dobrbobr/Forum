<?php
require 'connection.php';
//mysql_query("SET NAMES cp1251");
session_start();
$name=$_SESSION['user_name'];
$date = date(DATE_ATOM);
$query="INSERT INTO  `mytest`.`messages` (Date, msgText, userName)
VALUES ('$date','$_POST[userMessage]','$name')";
mysql_query($query);
header("Location:main.php")
?>