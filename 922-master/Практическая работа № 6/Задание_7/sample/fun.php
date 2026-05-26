<?php
// Функция поиска названия команды по id
function fnGetTeamName($team, $id) {
    foreach ($team as $t) {
        if ($t['id_team'] == $id) {
            return $t['name'];
        }
    }
    return "Неизвестная группа"; // на случай, если ID не найден
}

// Функция вывода таблицы альбомов
function fnOutAlbum($album, $team) {
    $tr = "";
    foreach ($album as $item) {
        $name = fnGetTeamName($team, $item['id_team']);

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
?>
?>