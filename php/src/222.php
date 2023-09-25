<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#[[$Title$]]#</title>
</head>
<body>
<?php

if(!isset($_GET["base"]) && !isset($_GET["exponent"])) {
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
} else {
    $base = $_GET["base"]??null;
    $exponent = $_GET["exponent"]??null;
    echo $base . "^" . $exponent . " = ";
    $total = 1;
    if($exponent == 0) {
        echo 1;
    }
    for ($i = 1; $i <= $exponent; $i++) {
        $total *= $base;
    }
    echo $total;

}

?>
</body>
</html>