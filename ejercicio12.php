<?php

/* Leer 20 números y encontrar el mayor y el menor valor leídos */


$N = readline("Ingrese un número:");
$numMenor = $N;
$numMayor = $N;


for ($i = 2; $i <= 20; $i++) {

    $N = readline("Ingresar un numero:");

    if ($N < $numMenor) {

        $numMenor = $N;
    }
    if ($N > $numMayor) {

        $numMayor = $N;
    }
}

echo "el numero menor es:". $numMenor .PHP_EOL. "el numero mayor es:". $numMayor ; 
