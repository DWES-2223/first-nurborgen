<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(!isset($_GET["edat"])) {
            echo "Posa la teu edat actual a la variable edat pel QueryString";
        } else {
            $edat = $_GET["edat"]??null;

            if($edat <= 3) {
                echo "ets un bebé";
            } else if($edat <= 12){
                echo "ets un xiquet";
            } else if($edat <= 17) {
                echo "ets un adolescent";
            } else if($edat <= 66) {
                echo "ets un adult";
            } else {
                echo "ets un jubilat";
            }
        }

    ?>
</body>
</html>