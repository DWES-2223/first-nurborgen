<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#[[$Title$]]#</title>
</head>
<body>
<?php

if(!isset($_GET["nombre"])) {
    echo "Posa el nombre pel QueryString";
} else {
    $nombre = $_GET["nombre"]??null;
    ?>
    <table border="1">
        <tr>
            <tr>
                <th>a</th>
                <th>*</th>
                <th>b</th>
                <th>=</th>
                <th>a*b</th>
            </tr>

                <?php for($i = 0; $i <= 10; $i++) { ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td>*</td>
                        <td><?php echo $i ?></td>
                        <td>=</td>
                        <td><?php echo $i*$nombre ?></td>
                    </tr>
                <?php } ?>

        </table>
    <?php
}
?>
</body>
</html>