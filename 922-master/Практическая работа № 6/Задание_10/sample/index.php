<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	<hr>
	<h2>Список преподавателей</h2>

	<?php
// включение файла с массивом $personnel
require "personnel.php";

// определяем анонимную функцию для вывода таблицы персонала
$fnOutPersonnelAnon = function($personnel) {
    $tr = "";
    foreach ($personnel as $person) {
        $tr .= "
            <tr>
                <td>{$person['id_personnel']}</td>
                <td>{$person['surname']} {$person['name']} {$person['patronymic']}</td>
                <td>{$person['post']}</td>
                <td>{$person['category']}</td>
            </tr>	
        ";
    }
    return "
        <table border=1 cellpadding=5>
        <tr>
            <th>№</th>
            <th>Фамилия Имя Отчество</th>
            <th>Должность</th>
            <th>Категория</th>
        </tr>
        {$tr}
        </table>
    ";
};

// вызов анонимной функции и вывод
echo $fnOutPersonnelAnon($personnel);
?>

</body>
</html>