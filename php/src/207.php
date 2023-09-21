<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(!isset($_GET["numero1"]) && !isset($_GET["numero2"]) && !isset($_GET["numero3"])) {
            echo "Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString";
        } else {
            $numero1 = $_GET["numero1"]??null;
            $numero2 = $_GET["numero2"]??null;
            $numero3 = $_GET["numero3"]??null;

            $major = ($numero1 > $numero2) ? ($numero1 > $numero3 ? $numero1 : $numero3) : ($numero2 > $numero3 ? $numero2 : $numero3);

            echo "El nombre més gran entre " . $numero1 . ", " . $numero2 . " i " . $numero3 . " és el " . $major;
            //($numero3 > $numero2)?(($numero3 > $numero1)?(echo  $numero3):($numero2 > $numero1)?(echo $numero2)):(echo $numero1);


        }

    ?>
</body>
</html>