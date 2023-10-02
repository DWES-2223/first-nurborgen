<?php

include_once  ('functions.php');

echo esParell(6)?'Sí':'No';
echo '<br>';

$array = arrayAleatori(8,4,60);
echo "L'array es = ";
foreach ($array as $num){
    echo $num . ',';
}
echo '<br>';

echo "Hi ha " . countParells($array) . " números parells a l'array anterior";
echo '<br>';

echo "El número major de 8,9, 52, 7 i 32 és el: " . major(8,9,52,7,32);
echo '<br>';

echo concatenar('hola', 'què', 'tal', '?');
echo '<br>';

echo "El número 5547856 te " . digits(5547856) . " dígits";
echo '<br>';

echo "La segona xifra del número 5547856 és " . digitsN(5547856, 6);
echo '<br>';

