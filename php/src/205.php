<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $total = $_GET["quantitat"]??null;
        $bitllets = [500, 200, 100, 50, 20, 10, 5, 2, 1];
        $quants = [];
        foreach($bitllets as $bitllet) {
            $numero = intdiv($total, $bitllet);
            array_push($quants, $numero);
            $total -= $numero*$bitllet;
        }

        for($i=0;$i<count($bitllets);$i++) {
            if($bitllets[$i]<5){
                echo $quants[$i] . " moneda de " . $bitllets[$i] . "<br>";
            } else {
                echo $quants[$i] . " bitllet de " . $bitllets[$i] . "<br>";
            }
        }

    ?>
</body>
</html>