<?php 
// тестовый вывод 
// echo "<pre>"; 
// print_r($_FILES['myfile']); 
// echo "</pre>"; 
if(isset($_FILES['myfile'])){ 
// количество принятых файлов 
$count = count($_FILES["myfile"]["name"]); 
// запустим цикл по массиву файлов 
for ($i=0; $i < $count; $i++) { 
// текущая временная директория 
$current_path = $_FILES["myfile"]["tmp_name"][$i]; 
// оригинальное имя файла 
$filename = $_FILES["myfile"]['name'][$i]; 
// директория постоянного хранения 
$new_path = __DIR__ . '/upload/' . $filename; 
// перемещение файла 
move_uploaded_file($current_path, $new_path); 
} 
// если загрузка успешна все файлы должны быть в директории хранения 
echo "<h1>Проверьте папку upload</h1>"; 
} 
?> 
