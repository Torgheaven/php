<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Калькулятор квадратного уравнения</title>
</head>
<body>
    <h2>Найдите корни квадратного уравнения</h2>
    <form method="post">
        a: <input type="number" name="a" step="any" required><br>
        b: <input type="number" name="b" step="any" required><br>
        c: <input type="number" name="c" step="any" required><br>
        <input type="submit" value="Вычислить">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];
    $c = (float)$_POST["c"];
    
    if ($a == 0) {
        echo "<p>Значение a не должно быть равно 0!</p>";
    } else {
        $d = $b * $b - 4 * $a * $c;

        if ($d > 0) {
            $sqrt_d = sqrt($d);
            $x1 = (-$b + $sqrt_d) / (2 * $a);
            $x2 = (-$b - $sqrt_d) / (2 * $a);
            echo "<p>Дискриминант: $d</p>";
            echo "<p>Корни уравнения:<br> x1 = $x1 <br> x2 = $x2</p>";
        } elseif ($d == 0) {
            $x = -$b / (2 * $a);
            echo "<p>Дискриминант: $d</p>";
            echo "<p>Один корень: x = $x</p>";
        } else {
            echo "<p>Дискриминант: $d</p>";
            echo "<p>Нет действительных корней.</p>";
        }
    }
}
?>
</body>
</html>