<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Group = array( 
array("ID", "Название альбома", "Дата выпуска", "Лейбл", "Формат","Статус"), 
array("1", "Atom Heart Mother", "10 октября 1970", "EMI, Harvest, Capitol", "LP, CD","Золотой(USA)"),
array("2", "Meddle", "30 октября 1971", "EMI, Harvest, Capitol", "Vinyl, Кассета, CD","Платиновый(USA)"),
array("3", "Obscured by Clouds", "3 июня 1972", "EMI,nHarvest, Capitol", "LP, Кассета, CD","Золотой(USA), Серебряный(GBR)"),
array("4", "The Dark Side of the Moon", "17 марта 1973", "Harvest, Capitol, EMI", "LP, Кассета, CD, SACD","Платиновый(USA), Платиновый(GBR), Бриллиантовый(CAN)"),
array("5", "Wish You Were Here", "15 сентября 1975", "Harvest, EMI, Columbia, Capitol", "LP, 8-track, Кассета, CD, SACD","Платиновый(USA), Золотой(GBR), Платиновый(CAN)"),
array("6", "Animals", "23 января 1977", "Harvest, EMI, Columbia, Capitol", "LP, 8-track, Кассета, CD","Платиновый(USA), Золотой(GBR), Платиновый(CAN)"),
array("7", "The Wall", "30 ноября 1979", "Harvest, EMI, Columbia, Capitol", "LP, 8-track, Кассета, CD","Платиновый(USA), Платиновый(GBR), Бриллиантовый(CAN), Платиновый(NLD)"),
array("8", "The Final Cut", "21 марта 1983", "Harvest, EMI, Columbia, Capitol", "LP, 8-track, Кассета, CD","Платиновый(USA), Золотой(GBR), Золотой(NLD)"),
array("9", "A Momentary Lapse of Reason", "8 сентября 1987", "EMI, Columbia,", "LP, Кассета, CD","Платиновый(USA), Золотой(GBR), Платиновый(CAN)"),
array("10", "The Division Bell","30 марта 1994", "EMI, Columbia,", "LP, Кассета, CD","Платиновый(USA), Платиновый(GBR), Платиновый(CAN), Платиновый(NLD)")
    );
echo "<pre>";
print_r($Group);
echo "</pre>";
?>
</body>
</html>