<!DOCTYPE html>
<html lang="en">
<head>

    <?php
// Подключение данных
include 'dump/personnel.php';
include 'dump/educations.php';
include 'dump/courses.php';
// В случае необходимости подключайте dump, если он есть, или используйте свой массив

// Получение id из GET-параметра
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Поиск преподавателя по ID
$teacher = null;
foreach ($personnel as $p) {
    if ($p['id_personnel'] == $id) {
        $teacher = $p;
        break;
    }
}

// Проверка, найден ли преподаватель
if (!$teacher) {
    echo "Преподаватель с ID {$id} не найден.";
    exit;
}

// Вывод основной информации
echo "<h2>Информация о преподавателе</h2>";
echo "<p><strong>Фамилия:</strong> " . htmlspecialchars($teacher['surname']) . "</p>";
echo "<p><strong>Имя:</strong> " . htmlspecialchars($teacher['name']) . "</p>";
echo "<p><strong>Отчество:</strong> " . htmlspecialchars($teacher['patronymic']) . "</p>";
echo "<p><strong>Должность:</strong> " . htmlspecialchars($teacher['post']) . "</p>";
echo "<p><strong>Общий опыт работы:</strong> " . htmlspecialchars($teacher['experience_total']) . " года(лет)</p>";

// Вывод образования
echo "<h3>Образование</h3>";
$education_found = false;
foreach ($educations as $edu) {
    if ($edu['id_personnel'] == $id) {
        $education_found = true;
        echo "<p>Институт: " . htmlspecialchars($edu['institution']) . "<br>";
        echo "Квалификация: " . htmlspecialchars($edu['qualification']) . "<br>";
        echo "Специальность: " . htmlspecialchars($edu['specialty']) . "<br>";
        echo "Год получения: " . htmlspecialchars($edu['year_receipts']) . "<br>";
        echo "Год выпуска: " . htmlspecialchars($edu['year_release']) . "</p><hr>";
    }
}
if (!$education_found) {
    echo "<p>Нет информации об образовании.</p>";
}
?>

</head>
<body>
    
</body>
</html>