<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>

	
	<?php
		// курс
		$RUB= 1;
		$USD= 75.87;
		$CNY= 0.09;
		$USDZ= ($USD * 1000) * $CNY;
		echo $USDZ;
	?>
	

</body>
</html>