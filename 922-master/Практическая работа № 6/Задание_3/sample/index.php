<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
// Подключение файла с массивом $track
include 'track.php';
// Подключение файла с определением функции
// Задаем идентификатор альбома
$id = 10;
// Выводим треки указанного альбома
fnOutTrack($track, $id);
function fnOutTrack($track, $albumId) {
    echo "<table border='1'>";
    echo "<tr><th>ID трека</th><th>Название трека</th><th>Примечание</th><th>Альбом</th></tr>";

    foreach ($track as $t) {
        if ($t['id_album'] == $albumId) {
            echo "<tr>";
            echo "<td>{$t['id_track']}</td>";
            echo "<td>{$t['name']}</td>";
            echo "<td>{$t['note']}</td>";
            echo "<td>{$t['id_album']}</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}
    ?>
</body>
</html>