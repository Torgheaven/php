<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = isset($_GET['a']) ? (int)$_GET['a'] : 0;
    $b = isset($_GET['b']) ? (int)$_GET['b'] : 0;
    $c = isset($_GET['c']) ? (int)$_GET['c'] : 0;

    echo  $a . "x" . '<sup>' . 2 . '</sup>' . " + " . "(" . $b . "x) + " . "(" . $c . ") = 0" . '</p>';

    $d = pow($b, 2) - 4 * $a * $c;
    
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "x1 = " . $x1 . '<br />';
        echo "x2 = $x2</span>";
    } elseif ($d === 0) {
        $x = -$b / (2 * $a);
        echo "x = " . $x . '<br />';
    } else {
        echo "Нет корней ";
    }

    ?>
</body>
</html>