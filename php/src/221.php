<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#[[$Title$]]#</title>
</head>
<body>
<?php
    $suma = 0;
    for($i = 1; $i <= 10; $i++) {
        $suma += $i;
        if($i == 10){
            echo $i;
        } else {
            echo $i . "+";
        }

    }
    echo "=" . $suma;
?>
</body>
</html>