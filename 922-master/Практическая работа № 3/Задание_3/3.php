<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Вы успешно зарегистрировались на сайте</h1>
    <?php
    $worker = array(
    'Лаврецкая', 'Елизавета', 'Викторовна', 'elizaveta', '12345', 'lovel@mail.ru');
    echo "<h3>", $worker[0], " ", $worker[1], " ", $worker[2], '</h3>';
    echo 'Логин: ', $worker[3], '<br>';
    echo 'Пароль: ', $worker[4], '<br>';
    echo 'Email: ', $worker[5], '<br>';
?>
</body>
</html>