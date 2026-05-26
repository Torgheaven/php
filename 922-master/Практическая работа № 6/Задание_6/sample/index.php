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

// В файле index.php
require "album.php"; // Массив альбомов
require "team.php";  // Массив команд

// Функция поиска названия команды по id
function fnGetTeamName($id) {
    global $team; // получаем массив команд
    foreach ($team as $t) {
        if ($t['id_team'] == $id) {
            return $t['name'];
        }
    }
    return "Неизвестная группа"; // на случай, если ID не найден
}

function fnOutAlbum() {
    global $album, $team;

    $tr = "";

    // перебираем массив $album для формирования таблицы
    foreach ($album as $item) {
        // ищем название группы по её ID
        $name = fnGetTeamName($item['id_team']);

        $tr .= "
            <tr>
                <td>{$item['id_album']}</td>
                <td>{$item['title']}</td>
                <td>{$item['date']}</td>
                <td>{$item['country']}</td>
                <td>{$name}</td>
            </tr>	
        ";
    }

    $out = "
        <table border=1 cellpadding=5>
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
            <th>Наименование группы</th>
        </tr>
        {$tr}
        </table>
    ";

    return $out;		
}		

// вывод альбомов из массива album
echo fnOutAlbum();	

	?>
	

</body>
</html>