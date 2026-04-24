<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $worker = array(
    'Иванов', 'Иван', 'Иванович', '15.05.1985', 'Учитель математики', 'Высшная', 'Высшее (магистратура)', 'МГУ им. М.В. Ломоносова', 'Математик','Математика и информатика', '5 лет', '5 лет', 'ivanov_i@example.com');
    echo 'Фамилия: ', $worker[0], '<br>';
    echo 'Имя: ', $worker[1], '<br>';
    echo'Отчество: ', $worker[2], '<br>';
    echo 'Дата рождения: ', $worker[3], '<br>';
    echo 'Должность: ', $worker[4], '<br>';
    echo 'Категория: ', $worker[5], '<br>';
    echo 'Уровень образования: ', $worker[6], '<br>';
    echo'Учебное заведение: ', $worker[7], '<br>';
    echo'Квалификация: ', $worker[8], '<br>';
    echo'Специализация: ', $worker[9], '<br>';
    echo'Стаж в учебном заведении: ', $worker[10], '<br>';
    echo'Полный стаж: ', $worker[11], '<br>';
    echo'E-mail: ', $worker[12], '<br>';
?>
</body>
</html>

