<?php

function esParell(int $a) : bool
{
    return $a%2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array
{
    $array=[];
    for($i = 0; $i < $tam; $i++) {
        array_push($array, rand($min, $max));
    }
    return $array;
}

function countParells(array $array): int
{
    $count = 0;
    foreach ($array as $num) {
        if(esParell($num)) {
            $count++;
        }
    }
    return $count;
}

function major():int
{
    $major = 0;
    foreach (func_get_args() as $num) {
        if($num > $major) {
            $major = $num;
        }
    }
    return $major;
}

function concatenar(...$paraules): string
{
    $frase = '';
    foreach (func_get_args() as $paraula) {
        $frase .= $paraula . ' ';
    }
    return $frase;
}

function digits(int $num): int
{
    $num = (string)$num;
    return strlen($num);
}

function digitsN(int $num, int $post): int
{
    $num = (string)$num;
    return $num[$post - 1];
}