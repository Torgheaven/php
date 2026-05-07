<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h2>Введите строки по одной:</h2>
<form method="post" action="">
    <textarea name="lines" rows="10" cols="50" placeholder="Введите ваши строки здесь..."><?php echo isset($_POST['lines']) ? htmlspecialchars($_POST['lines']) : ''; ?></textarea><br>
    <input type="submit" value="Подсчитать">
</form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $lines = preg_split('/\R/', $_POST['lines']);

        $lines = array_filter(array_map('trim', $lines), fn($l) => $l !== '');

        $linesCount = count($lines);

        switch ($linesCount) {
            case 2:
                $text = "Беда.";
                break;
            case 4:
                $text = "Плохо.";
                break;
            case 6:
                $text = "Кажется, что вы где-то учились.";
                break;
            case 8:
                $text = "Вы среднестатистический человек.";
                break;
            case 10:
                $text = "Нормально.";
                break;
            case 12:
                $text = "Хорошо.";
                break;
            case 14:
                $text = "Отлично.";
                break;
            case 15:
                $text = "Отлично.";
                break;
            case 16:
                $text = "Отлично.";
                break;
            case 17:
                $text = "Отлично.";
                break;
            case 18:
                $text = "Отлично.";
                break;
            case 19:
                $text = "Отлично.";
                break;
            default:
                if ($linesCount > 19) {
                    $text = "Превышено максимальное количество учитываемых строк.";
                } elseif ($linesCount === 0) {
                    $text = "Вы ничего не ввели.";
                } else {
                    $text = "Количество строк ($linesCount) не распознано или не предусмотрено.";
                }
                break;
        }

        echo "<h3>Количество введённых строк: $linesCount</h3>";
        echo "<h3>Текст: $text</h3>";
    }
?>
</body>
</html>
