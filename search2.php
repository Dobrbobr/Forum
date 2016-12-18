<html>
<head><title>Базы данных</title><head>
<body>
Список студентов группы<p>
<?php
require 'connection.php';
//mysql_query("SET NAMES cp1251");

$query="select name, address, birthday from students where birthday>'$_GET[low_date]' and birthday<'$_GET[up_date]'";
$result=mysql_query($query);
$num=mysql_num_rows($result);
echo "$num записи <p>";

echo '<table border=1 width=300>';
while($row=mysql_fetch_row($result)){
	echo '<tr>';
	foreach($row  as $val)
		echo "<td>$val</td> ";
	echo '</tr>';
	}
echo '</table>';
?>
</body>
</html>