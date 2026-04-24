<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$E = array('Familya'=>'Ivanov', 'name'=>'Ivan', 'othestvo'=>'Ivanovich', 'date'=>'15.05.1985', 'dolznost'=>'ychitel matematiki', 'kategory'=>'vishee', 'yroven_obraz'=>'vishee (magistratyra)', 'ycheb_zaved'=>'MGY im. M.V.Lomonosova', 'kvalifi'=>'Matematic, prepodovatel', 'spezi'=>'matematika i informatika', 'stag'=> '5 let', 'polnii stag'=>'12 let', 'e-mail'=> 'ivanov_i@example');
?>
    <div class="card">
        <p>Фамилия: <?php echo $E['Familya']; ?></p>
        <p>Имя: <?php echo $E['name']; ?></p>
        <p>Отчество: <?php echo $E['othestvo']; ?></p>
        <p>Дата рождения: <?php echo $E['date']; ?></p>
        <p>Должность: <?php echo $E['dolznost']; ?></p>
        <p>Категория: <?php echo $E['kategory']; ?></p>
        <p>Уровень образования: <?php echo $E['yroven_obraz']; ?></p>
        <p>Учебное заведение: <?php echo $E['ycheb_zaved']; ?></p>
        <p>Квалификация: <?php echo $E['kvalifi']; ?></p>
        <p>Специализация: <?php echo $E['spezi']; ?></p>
        <p>Стаж в учебном заведении: <?php echo $E['stag']; ?></p>
        <p>Полный стаж: <?php echo $E['polnii stag']; ?></p>
        <p>E-mail: <?php echo $E['e-mail']; ?></p>
    </div>
</body>
</html>