<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a"><br><br>
        <input type="number" name="b"><br><br>
        <input type="number" name="c"><br><br>
        <input type="submit" value="Отправить">
    </form>
    
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_post['a'];
        $b = $_post['b'];
        $c = $_post['c'];
            }
       
    if ($a && $b && $c){
        $q=0;
    }
    elseif (($a && $b)||($b && $c)||($a && $c)){
        $q = 0;
    }
    elseif ($a || $b || $c){
        $q = 1;
    }
    ?>
    
</body>

</html>