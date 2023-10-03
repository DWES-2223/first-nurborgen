<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Introducció de Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include ('atletes.php');
include ('functions.php');
global $records;
?>
<body>
<?php
    $dates = array_column_ext($records, 'data', -1);
    $clubs = array_column_ext($records, 'club', -1);
    $llocs = array_column_ext($records, 'lloc', -1);
    $natalicis = array_column_ext($records, 'natalici', -1);
    $atletes = array_column_ext($records, 'atleta', -1);

    $vell = vell($dates);
    $laureadoClub = laureado($clubs);
    $laureadoLloc = laureado($llocs);
    $laureadoAtleta = laureado($atletes);
    $jove = jove($natalicis, $dates);
    $nomAtleta = '';
    foreach ($records as $record => $dades) {
        $nomAtleta = $records[$record]['alteta'];
    }
?>
<p>Record més antic:  <?= $vell ?></p>
<p>Club amb més títols: <?= $laureadoClub ?></p>
<p>Persona amb més records: <?= $laureadoAtleta ?> </p>
<p>Ciutat més propicia: <?= $laureadoLloc?></p>
<p>Mes jove en aconsegir el record: <?= $laureadoAtleta?> - <?= $jove[1]?> anys</p>
<?php
include ('270a.php');
?>


</body>
</html>