<?php
session_start();
if($_SESSION['login']!='ok')
	{header("Location:index.html");
	exit();};
?>
<html>
<head>
	<title>Сеансы</title>
</head>
<body>
<?php
require 'connection.php';
//mysql_query("SET NAMES cp1251");

$query='select userName, msgText, Date from messages';
$result=mysql_query($query);
$num=mysql_num_rows($result);

echo '<table border=1 width=300>';
for($i=0;$i<$num;$i++)
	{
	$row=mysql_fetch_row($result);
	echo '<tr>';
	foreach($row  as $val)
		echo "<td>$val</td> ";
	echo '</tr>';
	}
echo '</table>';
?>
	<form action='tage.php' method='post'>
		<textarea name='userMessage'>Введи текст сообщения</textarea>
		<input type=submit>
	</form>
</body>
</html>