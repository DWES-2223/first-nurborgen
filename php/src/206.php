<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(!isset($_GET["numero"])) {
            echo "Posa el numero a comprobar a la variable numero del QueryString";
        } else {
            $num = $_GET["numero"]??null;
            if($num > 0) {
                echo "El número " . $num . " és positiu";
            } else if ($num == 0) {
                echo "El número 0 és zero";
            } else {
                echo "El número " . $num . " és negatiu";
            }
        }
    ?>
</body>
</html>