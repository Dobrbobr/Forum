<html>
<head>
	<title>XML-1</title>
	<meta charset = 'utf-8' />
</head>

<?php //================================================
$xml = simplexml_load_file('example1.xml');
$imgPath = $xml->movie->plotImg;
?>
<body>
<h3>Основы работы с SimpleXML. Проанлизирован файл example.php, содержащий описание корректного XML документа.
</h3>
<img src = '<?php echo $imgPath;?>' alt='img' />
<p>
<hr>

<?php //================================================
/* Для каждого элемента character мы отображаем элемент name.*/
foreach ($xml->movie->characters->character as $acter)
	echo $acter->name, '<br />';
?>
<p>
<hr>

<?php //================================================
/* Получение доступа к атрибутам элементов <rating> для первого кино.*/
foreach ($xml->movie[0]->rating as $rating) {
	switch($rating['type']) { // Возвращает атрибуты как элементы массива
	case 'thumbs':
		echo $rating, ' thumbs up';
		break;
	case 'stars':
		echo $rating, ' stars';
		break;
	}
}
?>
<p>
<hr>

<?php //================================================
foreach ($xml->xpath('//character') as $character) {
	echo $character->name, ' сыграл ', $character->actor, '<br />';
}
?>
<p>
<hr>

</body>
</html>