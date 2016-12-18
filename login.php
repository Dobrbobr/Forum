<html>
<head><title>Ok</title><head>
<body>
new user<p>
<?php
require 'connection.php';
//mysql_query("SET NAMES cp1251");

$query="INSERT INTO  `mytest`.`users` (id, name, rights, pswd)
VALUES (NULL ,  '$_POST[user_name]',  1, MD5(  '$_POST[user_pswd]' ));";
/*if ($_SERVER['REMOTE_ADDR']=='127.0.0.1')
	echo 'access deniy';*/
mysql_query($query);

?>
</body>
</html>