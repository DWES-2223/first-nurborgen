<!DOCTYPE html>
<html lang="es">
<?php
$nom = "Bruce";
$cognom1 = "Wayne";
$cognom2 = "Enterprise";
$email = "batman@dccomics.com";
$anyoNacim = 1939;
$tel = 666123456;

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Càlculs</title>
</head>

<body>
    <table>
        <tr>
            <td>Nom</td>
            <td><?= $nom ?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?= $cognom1 . ' ' . $cognom2 ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?= $anyoNacim ?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?= $tel ?></td>
        </tr>
    </table>
</body>

</html>