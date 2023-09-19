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

        $anyActual = date('Y');
        echo "La teua edat és " . $_GET["edat"] . " anys<br>";
        echo "En l'any " . $anyActual + 10 . " tindràs " . $_GET["edat"] + 10 . " anys<br>";
        echo "En l'any " . $anyActual - 10 . " tindràs " . $_GET["edat"] - 10 . " anys<br>";
        echo "La teua jubil·lació serà l'any " . $anyActual + 67 - $_GET["edat"];
    }

    ?>
</body>
</html>