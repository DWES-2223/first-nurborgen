<!DOCTYPE html>
<html lang="es">
<?php
$a = 10;
$b = 5;

define('FACTOR', 2);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Càlculs</title>
</head>

<body>
    <p>
        <?php
        $resultat = $a * $b * FACTOR;
        echo "àrea del rectangle és: " . $resultat;
        ?>
    </p>
</body>

</html>