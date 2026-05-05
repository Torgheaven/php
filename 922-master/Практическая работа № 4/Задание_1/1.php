<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="a"><br><br>
        <input type="number" name="b"><br><br>
        <input type="number" name="c"><br><br>
        <input type="submit" value="Отправить">
    </form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    
        
       

        } 



 
        if ($a && $b && $c ) {
            $q = 0;
        } elseif (($a && $b )|| ($b && $c) || ($a && $a)) {
            $q = 1;
        } elseif ($a || $b ||$c ) {
            $q = 1;
    
        }
         else { 
            $q = 0;
        }
    
    

            echo "<table border='1'><tr><th>Ввод</th><th>Вывод</th></tr><br>";
                echo"<tr><td>a=$a, b=$b, c=$c</td><td>q=$q</td></tr></table>";

    ?>
   
</body>

</html>