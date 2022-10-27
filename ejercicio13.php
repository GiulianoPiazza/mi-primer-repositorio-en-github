<?php

/*  Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los 
positivos y la media de los negativos  */


$cantPositivo = 0;
$cantNegativo = 0;
$sumaPositivo = 0;
$sumaNegativo = 0;


do {
    $a = readline("ingrese un numero distinto de 0:") .PHP_EOL;

    if ($a > 0) {

        $cantPositivo++;
        $sumaPositivo += $a;
    } else {

        $cantNegativo++;
        $sumaNegativo += $a;
    }
} while ($a != 0);

echo "El promedio de los positivos es: ". $sumaPositivo / $cantPositivo .PHP_EOL;
echo "El promedio de los negativos es: ". $sumaNegativo / $cantNegativo .PHP_EOL;
