<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Альбомы</h2>
	
	
<?php
// index.php

require "album.php"; // массив альбомов
require "team.php";  // массив команд
require "fun.php";   // функции

// вывводим таблицу, передавая массивы как параметры
echo fnOutAlbum($album, $team);
?>
	

</body>
</html>