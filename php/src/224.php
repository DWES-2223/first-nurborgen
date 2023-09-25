<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#[[$Title$]]#</title>
</head>
<body>
<form method="post">
    <label>
        <input name="quantitat" type="number">
    </label>
    <button type="submit">Generar</button>
</form>
<form method="post">
    <?php
    $quantitat = $_GET["quantitat"]??null;
    if(isset($quantitat)){
        for($i = 0; $i <= $quantitat; $i++) {?>
            <label>
                <input name="numero[]" type="number">
            </label>
        <?php }
    } ?>
    <button type="submit">Sumar</button>
</form>


</body>
</html>