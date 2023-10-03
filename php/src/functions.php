<?php
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}

function vell(array $records)
{
    $dataInit = $records[0]['data'];
    $vell = 0;
    for($i = 0; $i < count($records); $i++) {
        if( fecha_inglesa($records[$i]['data']) < fecha_inglesa($dataInit)) {
            $dataInit = fecha_inglesa($records[$i]['data']);
            $vell = $i;
        }
    }
    return $vell;
}

function fecha_inglesa($data) {
    return date('Y/m/d', strtotime($data));
}

function laureado(array $record) {
    $contador = array_count_values($record);
    arsort($contador);
    $repetit = reset($contador);
    return array_key_first($contador);
}

function jove($array) {
    $jove = $array[0];
    $diff = 100;
    foreach ($array as $item) {
        $edat = $item['natalici'] - date('Y', strtotime($item['data']));
        if($edat < $diff) {
            $jove = $item;
        }
    }
    return $jove;
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}