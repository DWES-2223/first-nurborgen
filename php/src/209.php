<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(!isset($_GET["hora"]) && !isset($_GET["minut"]) && !isset($_GET["segon"])) {
            echo "Posa les variables hora, minut i segon pel QueryString";
        } else {
            $hora = $_GET["hora"]??null;
            $minut = $_GET["minut"]??null;
            $segon = $_GET["segon"]??null;

            if($segon < 59) {
                $segon += 1;
            } else {
                $segon = 0;
                if($minut < 59) {
                    $minut += 1;
                } else {
                    $minut = 0;
                    if($hora < 24) {
                        $hora += 1;
                    } else {
                        $hora = 0;
                    }
                }
            }
            
            
            

            echo $hora . ":" . $minut . ":" . $segon;
        }

    ?>
</body>
</html>