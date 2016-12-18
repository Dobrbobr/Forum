<?php 

$xml = @simplexml_load_file('language.xml') or die('FATAL ERROR');
switch ($_GET['nomer']) {
	case '1':
		$currentRating=$xml->php;
		$currentRating+=1;
		$xml->php = $currentRating;
		$xml->asXML('language.xml');
		break;
	case '2':
		$currentRating=$xml->java;
		$currentRating+=1;
		$xml->java = $currentRating;
		$xml->asXML('language.xml');
		break;
	case '3':
		$currentRating=$xml->python;
		$currentRating+=1;
		$xml->python = $currentRating;
		$xml->asXML('language.xml');
		break;
}
echo $currentRating;
 ?>