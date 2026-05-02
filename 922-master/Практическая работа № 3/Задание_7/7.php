<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $discography = array(
		array("id" => "1",
		"name" => "Atom Heart Mother",
		"date" => "10 октября 1970",
		"label" => "EMI, Harvest, Capitol",
		"format" => "LP, CD",
		"status" => "Золотой (USA)"
        ),

		array("id" => "2",
		"name" => "Meddle",
		"date" => "30 октября 1971",
		"label" => "EMI, Harvest, Capitol",
		"format" => "Vinyl, Кассета, CD",
		"status" => "Платиновый (USA)"
        ),

		array("id" => "3",
		"name" => "Obscured by Clouds",
		"date" => "3 июня 1972",
		"label" => "EMI, Harvest, Capitol",
		"format" => "LP, Кассета, CD",
		"status" => "Золотой (USA)", "Серебряный (GBR)"
        ),

		array("id" => "4",
		"name" => "The Dark Side of the Moon",
		"date" => "17 марта 1973",
		"label" => "Harvest, Capitol, EMI",
		"format" => "LP, Кассета, CD, SACD",
		"status" => "Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN)"
        ),

		array("id" => "5",
		"name" => "Wish You Were Here",
		"date" => "15 сентября 1975",
		"label" => "Harvest, EMI, Columbia, Capitol",
		"format" => "LP, 8-track, Кассета, CD, SACD",
		"status" => "Платиновый (USA), Золотой (GBR), Платиновый (CAN)"
        ),

		array("id" => "6",
		"name" => "Animals",
		"date" => "23 января 1977",
		"label" => "Harvest, EMI Columbia, Capitol",
		"format" => "LP, 8-track, Кассета, CD",
		"status" => "Платиновый (USA), Золотой (GBR), Платиновый (CAN)"
        ),

		array("id" => "7",
		"name" => "The Wall",
		"date" => "30 ноября 1979",
		"label" => "Harvest, EMI Columbia, Capitol",
		"format" => "LP, 8-track, Кассета, CD",
		"status" => "Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN), Платиновый (NLD)"
        ),

		array("id" => "8",
		"name" => "The Final Cut",
		"date" => "21 марта 1983",
		"label" => "Harvest, EMI Columbia, Capitol",
		"format" => "LP, 8-track, Кассета, CD",
		"status" => "Платиновый (USA), Золотой (GBR), Золотой(NLD)"
        ),

		array("id" => "9",
		"name" => "A Momentary Lapse of Reason",
		"date" => "8 сентября 1987",
		"label" => "EMI, Columbia",
		"format" => "LP, Кассета, CD",
		"status" => "Платиновый (USA), Золотой (GBR), Платиновый (CAN), Золотой(NLD)"
        ),
		
		array("id" => "10",
		"name" => "The Division Bell",
		"date" => "30 марта 1994",
		"label" => "EMI, Columbia",
		"format" => "LP, Кассета, CD",
		"status" => "Платиновый (USA), Платиновый (GBR), Платиновый (CAN), Платиновый(NLD)"
        )
    );
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Date</th>
        <th>Label</th>
		<th>Format</th>
        <th>Status</th>
    </tr>
    <?php foreach ($discography as $discographys): ?>
        <tr>
            <td><?php echo $discographys['id']; ?></td>
            <td><?php echo $discographys['name']; ?></td>
			<td><?php echo $discographys['date']; ?></td>
            <td><?php echo $discographys['label']; ?></td>
			<td><?php echo $discographys['format']; ?></td>
            <td><?php echo $discographys['status']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>